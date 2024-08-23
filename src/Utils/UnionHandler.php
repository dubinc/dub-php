<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Utils;

use JMS\Serializer\Context;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Exception\NonFloatCastableTypeException;
use JMS\Serializer\Exception\NonIntCastableTypeException;
use JMS\Serializer\Exception\NonStringCastableTypeException;
use JMS\Serializer\Exception\NonVisitableTypeException;
use JMS\Serializer\Exception\PropertyMissingException;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Visitor\DeserializationVisitorInterface;
use JMS\Serializer\Visitor\SerializationVisitorInterface;

final class UnionHandler implements SubscribingHandlerInterface
{
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return array<array<string, mixed>>
     */
    public static function getSubscribingMethods(): array
    {
        $methods = [];
        $formats = ['json', 'xml'];

        foreach ($formats as $format) {
            $methods[] = [
                'type' => 'union',
                'format' => $format,
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'method' => 'deserializeUnion',
            ];
            $methods[] = [
                'type' => 'union',
                'format' => $format,
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'method' => 'serializeUnion',
            ];
        }

        return $methods;
    }

    /**
     * @param  SerializationVisitorInterface  $visitor
     * @param  mixed  $data
     * @param  array<string, mixed>  $type
     * @param  SerializationContext  $context
     * @return mixed
     */
    public function serializeUnion(
        SerializationVisitorInterface $visitor,
        mixed $data,
        array $type,
        SerializationContext $context
    ): mixed {
        if ($this->isPrimitiveType(gettype($data))) {
            return $this->matchSimpleType($data, $type, $context);
        } else {
            $resolvedType = [
                'name' => get_class($data),
                'params' => [],
            ];

            return $context->getNavigator()->accept($data, $resolvedType);
        }
    }

    /**
     * @param  DeserializationVisitorInterface  $visitor
     * @param  mixed  $data
     * @param  array<string, mixed>  $type
     * @param  DeserializationContext  $context
     * @return mixed
     */
    public function deserializeUnion(DeserializationVisitorInterface $visitor, mixed $data, array $type, DeserializationContext $context): mixed
    {
        if ($data instanceof \SimpleXMLElement) {
            throw new RuntimeException('XML deserialisation into union types is not supported yet.');
        }


        $alternativeName = null;

        foreach ($this->reorderTypes($type)['params'] as $possibleType) {
            $propertyMetadata = $context->getMetadataStack()->top();
            $finalType = null;
            if ($propertyMetadata->unionDiscriminatorField !== null) {
                if (! array_key_exists($propertyMetadata->unionDiscriminatorField, $data)) {
                    throw new NonVisitableTypeException('Union Discriminator Field \''.$propertyMetadata->unionDiscriminatorField.'\' not found in data');
                }

                $lkup = $data[$propertyMetadata->unionDiscriminatorField];
                if (! empty($propertyMetadata->unionDiscriminatorMap)) {
                    if (array_key_exists($lkup, $propertyMetadata->unionDiscriminatorMap)) {
                        $finalType = [
                            'name' => $propertyMetadata->unionDiscriminatorMap[$lkup],
                            'params' => [],
                        ];
                    } else {
                        throw new NonVisitableTypeException('Union Discriminator Map does not contain key \''.$lkup.'\'');
                    }
                } else {
                    $finalType = [
                        'name' => $lkup,
                        'params' => [],
                    ];
                }
            }

            if ($finalType !== null && $finalType['name'] !== null) {
                return $context->getNavigator()->accept($data, $finalType);
            } else {
                $typeToTry = $possibleType['name'];
                if ($typeToTry === 'array') {
                    $typeNames = array_map(fn ($t) => $t['name'], $possibleType['params']);
                    $typeToTry = 'array<'.implode(', ', $typeNames).'>';
                }
                $serializer = JSON::createSerializer();
                try {
                    if ($this->isPrimitiveType($possibleType['name']) && (is_array($data) || ! $this->testPrimitive($data, $possibleType['name']))) {
                        continue;
                    }

                    $json_encoded_data = json_encode($data);
                    if ($json_encoded_data === false) {
                        throw new RuntimeException('Failed to encode data to JSON: '.json_last_error_msg());
                    }
                    $accept = $serializer->deserialize($json_encoded_data, $typeToTry, 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));

                    return $accept;
                } catch (NonVisitableTypeException $e) {
                    continue;
                } catch (PropertyMissingException $e) {
                    continue;
                } catch (NonStringCastableTypeException $e) {
                    continue;
                } catch (NonIntCastableTypeException $e) {
                    continue;
                } catch (NonFloatCastableTypeException $e) {
                    continue;
                }
            }
        }

        return null;
    }

    /**
     * @param  mixed  $data
     * @param  array<string, mixed>  $type
     * @param  Context  $context
     */
    private function matchSimpleType(mixed $data, array $type, Context $context): mixed
    {
        $alternativeName = null;

        foreach ($type['params'] as $possibleType) {
            if ($this->isPrimitiveType($possibleType['name']) && ! $this->testPrimitive($data, $possibleType['name'])) {
                continue;
            }

            try {
                return $context->getNavigator()->accept($data, $possibleType);
            } catch (NonVisitableTypeException $e) {
                continue;
            } catch (PropertyMissingException $e) {
                continue;
            }
        }

        return null;
    }

    /**
     * @param  string  $type
     * @return bool
     */
    private function isPrimitiveType(string $type): bool
    {
        return in_array($type, ['int', 'integer', 'float', 'double', 'bool', 'boolean', 'string']);
    }

    /**
     * @param  mixed  $data
     * @param  string  $type
     * @return bool
     */
    private function testPrimitive(mixed $data, string $type): bool
    {
        switch ($type) {
            case 'integer':
            case 'int':
                return (string) (int) $data === (string) $data;

            case 'double':
            case 'float':
                return (string) (float) $data === (string) $data;

            case 'bool':
            case 'boolean':
                return (string) (bool) $data === (string) $data;

            case 'string':
                return (string) $data === (string) $data;
        }

        return false;
    }

    /**
     * @param  array<string, mixed>  $type
     * @return array<string, mixed>
     */
    private function reorderTypes(array $type): array
    {
        if ($type['params']) {
            uasort($type['params'], static function ($a, $b) {
                if (\class_exists($a['name']) && \class_exists($b['name'])) {
                    $aClass = new \ReflectionClass($a['name']);
                    $bClass = new \ReflectionClass($b['name']);
                    $aRequiredPropertyCount = 0;
                    $bRequiredPropertyCount = 0;
                    foreach ($aClass->getProperties() as $property) {
                        if (! $property->getType()->allowsNull()) {
                            $aRequiredPropertyCount++;
                        }
                    }

                    foreach ($bClass->getProperties() as $property) {
                        if (! $property->getType()->allowsNull()) {
                            $bRequiredPropertyCount++;
                        }
                    }

                    return $bRequiredPropertyCount <=> $aRequiredPropertyCount;
                }

                if (\class_exists($a['name'])) {
                    return 1;
                }

                if (\class_exists($b['name'])) {
                    return -1;
                }

                $order = ['null' => 0, 'true' => 1, 'false' => 2, 'bool' => 3, 'int' => 4, 'float' => 5, 'string' => 6];

                return ($order[$a['name']] ?? 7) <=> ($order[$b['name']] ?? 7);
            });
        }

        return $type;
    }
}