<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Utils;

use ReflectionProperty;

class QueryParameters
{
    /**
     * @param  string  $type
     * @param  mixed  $queryParams
     * @param  array<string,string>  $urlOverride
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return ?string
     */
    public function parseQueryParams(string $type, mixed $queryParams, array $urlOverride, ?array $globals = null): ?string
    {
        $parts = [];

        $fields = array_keys(get_class_vars($type));

        foreach ($fields as $field) {
            $value = $queryParams !== null ? $queryParams->{$field} : null;

            if ($globals !== null) {
                $value = populateGlobal($value, 'queryParam', $field, $globals);
            }

            if ($value === null) {
                continue;
            }

            $requestMetadata = RequestBodies::parseRequestMetadata(new ReflectionProperty($type, $field));
            if ($requestMetadata !== null) {
                continue;
            }

            $metadata = $this->parseQueryParamsMetadata(new ReflectionProperty($type, $field));
            if ($metadata === null) {
                continue;
            }
            if (! empty($metadata->serialization)) {
                $parts = array_merge($parts, $this->parseSerializationParams($metadata, $value));
            } else {
                match ($metadata->style) {
                    'deepObject' => $parts = array_merge_recursive($parts, $this->parseDeepObjectParams($metadata, $value)),
                    'form' => $parts = array_merge_recursive($parts, $this->parseDelimitedParams($metadata, $value, ',')),
                    'pipeDelimited' => $parts = array_merge_recursive($parts, $this->parseDelimitedParams($metadata, $value, '|')),
                    default => throw new \RuntimeException('Unsupported style '.$metadata->style),
                };
            }
        }

        $parts = array_merge($parts, $urlOverride);
        $result = self::recursivelyBuildQueryString($parts);

        return empty($parts) ? null : $result;
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @return array<string,string>
     */
    private function parseSerializationParams(ParamsMetadata $metadata, mixed $value): array
    {
        $queryParams = [];

        switch ($metadata->serialization) {
            case 'json':
                $serializer = JSON::createSerializer();
                $queryParams[$metadata->name] = $serializer->serialize($value, 'json');
                break;
            default:
                throw new \Exception('Unsupported serialization: '.$metadata->serialization);
        }

        return $queryParams;
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @return array<string, array<int, string>|string>
     */
    private function parseDeepObjectParams(ParamsMetadata $metadata, mixed $value): array
    {
        $queryParams = [];

        $dateTimeFormat = $metadata->dateTimeFormat;

        switch (gettype($value)) {
            case 'object':
                foreach ($value as $field => $val) { /** @phpstan-ignore-line */
                    if ($val === null) {
                        continue;
                    }

                    $fieldMetaData = $this->parseQueryParamsMetadata(new ReflectionProperty($value::class, $field));
                    if ($fieldMetaData === null) {
                        continue;
                    }

                    $dateTimeFormat = $fieldMetaData->dateTimeFormat;

                    $items = [];

                    if (is_array($val) && array_is_list($val)) {
                        foreach ($val as $item) {
                            $items[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                        }
                    } else {
                        $queryParams[$metadata->name.'['.$fieldMetaData->name.']'] = valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                    }

                    if (count($items) > 0) {
                        $queryParams[$metadata->name.'['.$fieldMetaData->name.']'] = $items;
                    }
                }
                break;
            case 'array':
                if (! array_is_list($value)) {
                    foreach ($value as $key => $val) {
                        if ($val === null) {
                            continue;
                        }

                        $items = [];

                        if (is_array($val) && array_is_list($val)) {
                            foreach ($val as $item) {
                                $items[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                            }
                        } else {
                            $queryParams[$metadata->name.'['.$key.']'] = valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                        }

                        if (count($items) > 0) {
                            $queryParams[$metadata->name.'['.$key.']'] = $items;
                        }
                    }
                }
                break;
        }

        return $queryParams;
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @param  string  $delimiter
     * @return array<string, array<int, string>|string>
     */
    private function parseDelimitedParams(ParamsMetadata $metadata, mixed $value, string $delimiter): array
    {
        $queryParams = [];

        $dateTimeFormat = $metadata->dateTimeFormat;

        switch (gettype($value)) {
            case 'object':
                $items = [];

                foreach ($value as $field => $val) { /** @phpstan-ignore-line */
                    if ($val === null) {
                        continue;
                    }

                    $fieldMetaData = $this->parseQueryParamsMetadata(new ReflectionProperty($value::class, $field));
                    if ($fieldMetaData === null) {
                        continue;
                    }

                    $dateTimeFormat = $fieldMetaData->dateTimeFormat;

                    if ($metadata->explode) {
                        $queryParams[$fieldMetaData->name] = valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                    } else {
                        $items[] = $fieldMetaData->name.$delimiter.valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                    }
                }

                if (count($items) > 0) {
                    $queryParams[$metadata->name] = implode($delimiter, $items);
                }
                break;
            case 'array':
                if (array_is_list($value)) {
                    $values = [];
                    $items = [];

                    foreach ($value as $item) {
                        if ($metadata->explode) {
                            $values[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                        } else {
                            $items[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                        }
                    }

                    if (count($items) > 0) {
                        $values[] = implode($delimiter, $items);
                    }

                    $queryParams[$metadata->name] = $values;
                } else {
                    $items = [];

                    foreach ($value as $key => $val) {
                        if ($val === null) {
                            continue;
                        }

                        if ($metadata->explode) {
                            $queryParams[$key] = valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                        } else {
                            $items[] = $key.$delimiter.valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                        }
                    }

                    if (count($items) > 0) {
                        $queryParams[$metadata->name] = implode($delimiter, $items);
                    }
                }
                break;
            default:
                $queryParams[$metadata->name] = valToString($value, ['dateTimeFormat' => $dateTimeFormat]);
        }

        return $queryParams;
    }

    /**
     * @param  array<int|string, string|array<string|int, string>>  $queryParams
     * @return string
     */
    private static function recursivelyBuildQueryString(array $queryParams): string
    {
        $parts = [];

        foreach ($queryParams as $key => $value) {
            if (is_array($value) && array_is_list($value)) {
                $parts = array_merge($parts, array_map(fn ($v) => self::buildQueryString($key, $v), $value));
            } elseif (is_array($value)) {
                $res = self::recursivelyBuildQueryString($value);
                $parts[] = self::buildQueryString($key, $res);
            } else {
                $parts[] = self::buildQueryString($key, $value);
            }
        }

        return implode('&', $parts);
    }

    /**
     * @param  string|int  $queryParamKey
     * @param  string  $queryParamValue
     * @return string
     */
    private static function buildQueryString(string|int $queryParamKey, string $queryParamValue): string
    {
        if (is_int($queryParamKey)) {
            $queryParamKey = (string) $queryParamKey;
        }

        return implode('=', [urlencode($queryParamKey), urlencode($queryParamValue)]);
    }

    private function parseQueryParamsMetadata(ReflectionProperty $property): ?ParamsMetadata
    {
        $metadataStr = SpeakeasyMetadata::find($property->getAttributes(SpeakeasyMetadata::class), 'queryParam');
        if ($metadataStr === null) {
            return null;
        }

        $metadata = ParamsMetadata::parse($metadataStr);
        if ($metadata === null) {
            return null;
        }

        return $metadata;
    }
}
