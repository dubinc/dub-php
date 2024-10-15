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
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Whether the domain is verified.
     *
     * @var ?bool $verified
     */
    #[\JMS\Serializer\Annotation\SerializedName('verified')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $verified = null;

    /**
     * Whether the domain is the primary domain for the workspace.
     *
     * @var ?bool $primary
     */
    #[\JMS\Serializer\Annotation\SerializedName('primary')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $primary = null;

    /**
     * Whether the domain is archived.
     *
     * @var ?bool $archived
     */
    #[\JMS\Serializer\Annotation\SerializedName('archived')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     * Provide context to your teammates in the link creation modal by showing them an example of a link to be shortened.
     *
     * @var ?string $placeholder
     */
    #[\JMS\Serializer\Annotation\SerializedName('placeholder')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $placeholder = null;

    /**
     * The URL to redirect to when a link under this domain has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiredUrl')]
    public ?string $expiredUrl;

    /**
     * The URL to redirect to when a link under this domain doesn't exist.
     *
     * @var ?string $notFoundUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('notFoundUrl')]
    public ?string $notFoundUrl;

    /**
     * The date the domain was created.
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * The date the domain was last updated.
     *
     * @var string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    public string $updatedAt;

    /**
     * The registered domain record.
     *
     * @var ?RegisteredDomain $registeredDomain
     */
    #[\JMS\Serializer\Annotation\SerializedName('registeredDomain')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\RegisteredDomain|null')]
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
    public function __construct(string $id, string $slug, string $createdAt, string $updatedAt, ?string $expiredUrl = null, ?string $notFoundUrl = null, ?RegisteredDomain $registeredDomain = null, ?bool $verified = false, ?bool $primary = false, ?bool $archived = false, ?string $placeholder = 'https://dub.co/help/article/what-is-dub')
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