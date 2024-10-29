<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Utils;

use Speakeasy\Serializer\Context;
use Speakeasy\Serializer\GraphNavigator;
use Speakeasy\Serializer\Handler\SubscribingHandlerInterface;
use Speakeasy\Serializer\JsonDeserializationVisitor;
use Speakeasy\Serializer\JsonSerializationVisitor;

class BigIntHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => '\\Brick\\Math\\BigInteger',
                'method' => 'serialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => '\\Brick\\Math\\BigInteger',
                'method' => 'deserialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'Brick\\Math\\BigInteger',
                'method' => 'serialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'Brick\\Math\\BigInteger',
                'method' => 'deserialize',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serialize(JsonSerializationVisitor $visitor, \Brick\Math\BigInteger|string $any, array $type, Context $context): string|int
    {
        if (gettype($any) == 'string') {
            return $any;
        }

        return (int) $any->toBase(10);
    }

    /** @phpstan-ignore-next-line */
    public function deserialize(JsonDeserializationVisitor $visitor, string|int $data, array $type, Context $context): mixed
    {
        return \Brick\Math\BigInteger::of($data);
    }
}
