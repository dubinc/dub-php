<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class UpsertPartnerLinkRequestBody
{
    /**
     * The ID of the program that the partner is enrolled in.
     *
     * @var string $programId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('programId')]
    public string $programId;

    /**
     * The short link slug. If not provided, a random 7-character slug will be generated.
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     * Additional properties that you can pass to the partner's short link. Will be used to override the default link properties for this partner.
     *
     * @var ?UpsertPartnerLinkLinkProps $linkProps
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('linkProps')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\UpsertPartnerLinkLinkProps|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpsertPartnerLinkLinkProps $linkProps = null;

    /**
     * The ID of the partner to create a link for. Will take precedence over `tenantId` if provided.
     *
     * @var ?string $partnerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnerId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $partnerId = null;

    /**
     * The ID of the partner in your system. If both `partnerId` and `tenantId` are not provided, an error will be thrown.
     *
     * @var ?string $tenantId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tenantId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tenantId = null;

    /**
     * The URL to shorten (if not provided, the program's default URL will be used). Will throw an error if the domain doesn't match the program's default URL domain.
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  string  $programId
     * @param  ?string  $key
     * @param  ?UpsertPartnerLinkLinkProps  $linkProps
     * @param  ?string  $partnerId
     * @param  ?string  $tenantId
     * @param  ?string  $url
     * @phpstan-pure
     */
    public function __construct(string $programId, ?string $key = null, ?UpsertPartnerLinkLinkProps $linkProps = null, ?string $partnerId = null, ?string $tenantId = null, ?string $url = null)
    {
        $this->programId = $programId;
        $this->key = $key;
        $this->linkProps = $linkProps;
        $this->partnerId = $partnerId;
        $this->tenantId = $tenantId;
        $this->url = $url;
    }
}