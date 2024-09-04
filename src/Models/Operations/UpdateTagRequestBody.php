<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class UpdateTagRequestBody
{
    /**
     * The name of the tag to create.
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     * The color of the tag. If not provided, a random color will be used from the list: red, yellow, green, blue, purple, pink, brown.
     *
     * @var ?UpdateTagColor $color
     */
    #[\JMS\Serializer\Annotation\SerializedName('color')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Operations\UpdateTagColor|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateTagColor $color = null;

    /**
     * The name of the tag to create.
     *
     * @var ?string $tag
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tag = null;

    /**
     * @param  ?string  $name
     * @param  ?UpdateTagColor  $color
     * @param  ?string  $tag
     */
    public function __construct(?string $name = null, ?UpdateTagColor $color = null, ?string $tag = null)
    {
        $this->name = $name;
        $this->color = $color;
        $this->tag = $tag;
    }
}