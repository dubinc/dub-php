<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class DomainSchema
{
    /**
     * The unique identifier of the domain.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Whether the domain is verified.
     *
     * @var ?bool $verified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verified')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $verified = null;

    /**
     * Whether the domain is the primary domain for the workspace.
     *
     * @var ?bool $primary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $primary = null;

    /**
     * Whether the domain is archived.
     *
     * @var ?bool $archived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     * Provide context to your teammates in the link creation modal by showing them an example of a link to be shortened.
     *
     * @var ?string $placeholder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('placeholder')]
    public ?string $placeholder;

    /**
     * The URL to redirect to when a link under this domain has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiredUrl')]
    public ?string $expiredUrl;

    /**
     * The URL to redirect to when a link under this domain doesn't exist.
     *
     * @var ?string $notFoundUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notFoundUrl')]
    public ?string $notFoundUrl;

    /**
     * The date the domain was created.
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * The date the domain was last updated.
     *
     * @var string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public string $updatedAt;

    /**
     * The registered domain record.
     *
     * @var ?RegisteredDomain $registeredDomain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('registeredDomain')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\RegisteredDomain|null')]
    public ?RegisteredDomain $registeredDomain;

    /**
     * @param  string  $id
     * @param  string  $slug
     * @param  string  $createdAt
     * @param  string  $updatedAt
     * @param  ?bool  $verified
     * @param  ?bool  $primary
     * @param  ?bool  $archived
     * @param  ?string  $placeholder
     * @param  ?string  $expiredUrl
     * @param  ?string  $notFoundUrl
     * @param  ?RegisteredDomain  $registeredDomain
     */
    public function __construct(string $id, string $slug, string $createdAt, string $updatedAt, ?string $placeholder = null, ?string $expiredUrl = null, ?string $notFoundUrl = null, ?RegisteredDomain $registeredDomain = null, ?bool $verified = false, ?bool $primary = false, ?bool $archived = false)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->verified = $verified;
        $this->primary = $primary;
        $this->archived = $archived;
        $this->placeholder = $placeholder;
        $this->expiredUrl = $expiredUrl;
        $this->notFoundUrl = $notFoundUrl;
        $this->registeredDomain = $registeredDomain;
    }
}