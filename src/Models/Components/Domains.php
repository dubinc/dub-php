<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Domains
{
    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Whether the domain is the primary domain for the workspace.
     *
     * @var ?bool $primary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $primary = null;

    /**
     * Whether the domain is verified.
     *
     * @var ?bool $verified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verified')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $verified = null;

    /**
     * @param  string  $slug
     * @param  ?bool  $primary
     * @param  ?bool  $verified
     */
    public function __construct(string $slug, ?bool $primary = false, ?bool $verified = false)
    {
        $this->slug = $slug;
        $this->primary = $primary;
        $this->verified = $verified;
    }
}