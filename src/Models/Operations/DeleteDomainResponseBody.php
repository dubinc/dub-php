<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** DeleteDomainResponseBody - The domain was deleted. */
class DeleteDomainResponseBody
{
    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * @param  string  $slug
     */
    public function __construct(string $slug)
    {
        $this->slug = $slug;
    }
}