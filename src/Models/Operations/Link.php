<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class Link
{
    /**
     * The unique ID of the short link.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The domain of the short link. If not provided, the primary domain for the workspace will be used (or `dub.sh` if the workspace has no domains).
     *
     * @var string $domain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domain')]
    public string $domain;

    /**
     * The short link slug. If not provided, a random 7-character slug will be generated.
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     * The full URL of the short link, including the https protocol (e.g. `https://dub.sh/try`).
     *
     * @var string $shortLink
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shortLink')]
    public string $shortLink;

    /**
     * The ID of the program the short link is associated with.
     *
     * @var ?string $programId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('programId')]
    public ?string $programId;

    /**
     * @param  string  $id
     * @param  string  $domain
     * @param  string  $key
     * @param  string  $shortLink
     * @param  ?string  $programId
     */
    public function __construct(string $id, string $domain, string $key, string $shortLink, ?string $programId = null)
    {
        $this->id = $id;
        $this->domain = $domain;
        $this->key = $key;
        $this->shortLink = $shortLink;
        $this->programId = $programId;
    }
}