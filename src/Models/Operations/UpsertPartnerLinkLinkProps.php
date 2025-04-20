<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** UpsertPartnerLinkLinkProps - Additional properties that you can pass to the partner's short link. Will be used to override the default link properties for this partner. */
class UpsertPartnerLinkLinkProps
{
    /**
     * The prefix of the short link slug for randomly-generated keys (e.g. if prefix is `/c/`, generated keys will be in the `/c/:key` format). Will be ignored if `key` is provided.
     *
     * @var ?string $prefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prefix = null;

    /**
     * Whether the short link is archived. Defaults to `false` if not provided.
     *
     * @var ?bool $archived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     * The unique IDs of the tags assigned to the short link.
     *
     * @var string|array<string>|null $tagIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagIds')]
    #[\Speakeasy\Serializer\Annotation\Type('string|array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|array|null $tagIds = null;

    /**
     * The unique name of the tags assigned to the short link (case insensitive).
     *
     * @var string|array<string>|null $tagNames
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagNames')]
    #[\Speakeasy\Serializer\Annotation\Type('string|array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|array|null $tagNames = null;

    /**
     * Whether the short link uses Custom Social Media Cards feature. Defaults to `false` if not provided.
     *
     * @var ?bool $proxy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proxy')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $proxy = null;

    /**
     * Whether the short link uses link cloaking. Defaults to `false` if not provided.
     *
     * @var ?bool $rewrite
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rewrite')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $rewrite = null;

    /**
     * Allow search engines to index your short link. Defaults to `false` if not provided. Learn more: https://d.to/noindex
     *
     * @var ?bool $doIndex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('doIndex')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $doIndex = null;

    /**
     * The ID of the link in your database. If set, it can be used to identify the link in future API requests (must be prefixed with 'ext_' when passed as a query parameter). This key is unique across your workspace.
     *
     * @var ?string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('externalId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalId = null;

    /**
     * The ID of the tenant that created the link inside your system. If set, it can be used to fetch all links for a tenant.
     *
     * @var ?string $tenantId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tenantId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tenantId = null;

    /**
     * The unique ID existing folder to assign the short link to.
     *
     * @var ?string $folderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('folderId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $folderId = null;

    /**
     * The comments for the short link.
     *
     * @var ?string $comments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('comments')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $comments = null;

    /**
     * The date and time when the short link will expire at.
     *
     * @var ?string $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiresAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $expiresAt = null;

    /**
     * The URL to redirect to when the short link has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiredUrl')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $expiredUrl = null;

    /**
     * The password required to access the destination URL of the short link.
     *
     * @var ?string $password
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('password')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $password = null;

    /**
     * The custom link preview title (og:title). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The custom link preview description (og:description). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The custom link preview image (og:image). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $image = null;

    /**
     * The custom link preview video (og:video). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $video
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('video')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $video = null;

    /**
     * The iOS destination URL for the short link for iOS device targeting.
     *
     * @var ?string $ios
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ios')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ios = null;

    /**
     * The Android destination URL for the short link for Android device targeting.
     *
     * @var ?string $android
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('android')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $android = null;

    /**
     * The UTM source of the short link. If set, this will populate or override the UTM source in the destination URL.
     *
     * @var ?string $utmSource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $utmSource = null;

    /**
     * The UTM medium of the short link. If set, this will populate or override the UTM medium in the destination URL.
     *
     * @var ?string $utmMedium
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_medium')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $utmMedium = null;

    /**
     * The UTM campaign of the short link. If set, this will populate or override the UTM campaign in the destination URL.
     *
     * @var ?string $utmCampaign
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_campaign')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $utmCampaign = null;

    /**
     * The UTM term of the short link. If set, this will populate or override the UTM term in the destination URL.
     *
     * @var ?string $utmTerm
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_term')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $utmTerm = null;

    /**
     * The UTM content of the short link. If set, this will populate or override the UTM content in the destination URL.
     *
     * @var ?string $utmContent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_content')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $utmContent = null;

    /**
     * The referral tag of the short link. If set, this will populate or override the `ref` query parameter in the destination URL.
     *
     * @var ?string $ref
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ref = null;

    /**
     * An array of A/B test URLs and the percentage of traffic to send to each URL.
     *
     * @var ?array<UpsertPartnerLinkTestVariants> $testVariants
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('testVariants')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Dub\Models\Operations\UpsertPartnerLinkTestVariants>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $testVariants = null;

    /**
     * The date and time when the tests started.
     *
     * @var ?string $testStartedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('testStartedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $testStartedAt = null;

    /**
     * The date and time when the tests were or will be completed.
     *
     * @var ?string $testCompletedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('testCompletedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $testCompletedAt = null;

    /**
     * @param  ?string  $prefix
     * @param  ?bool  $archived
     * @param  string|array<string>|null  $tagIds
     * @param  string|array<string>|null  $tagNames
     * @param  ?bool  $proxy
     * @param  ?bool  $rewrite
     * @param  ?bool  $doIndex
     * @param  ?string  $externalId
     * @param  ?string  $tenantId
     * @param  ?string  $folderId
     * @param  ?string  $comments
     * @param  ?string  $expiresAt
     * @param  ?string  $expiredUrl
     * @param  ?string  $password
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?string  $image
     * @param  ?string  $video
     * @param  ?string  $ios
     * @param  ?string  $android
     * @param  ?string  $utmSource
     * @param  ?string  $utmMedium
     * @param  ?string  $utmCampaign
     * @param  ?string  $utmTerm
     * @param  ?string  $utmContent
     * @param  ?string  $ref
     * @param  ?array<UpsertPartnerLinkTestVariants>  $testVariants
     * @param  ?string  $testStartedAt
     * @param  ?string  $testCompletedAt
     * @phpstan-pure
     */
    public function __construct(?string $prefix = null, ?bool $archived = null, string|array|null $tagIds = null, string|array|null $tagNames = null, ?bool $proxy = null, ?bool $rewrite = null, ?bool $doIndex = null, ?string $externalId = null, ?string $tenantId = null, ?string $folderId = null, ?string $comments = null, ?string $expiresAt = null, ?string $expiredUrl = null, ?string $password = null, ?string $title = null, ?string $description = null, ?string $image = null, ?string $video = null, ?string $ios = null, ?string $android = null, ?string $utmSource = null, ?string $utmMedium = null, ?string $utmCampaign = null, ?string $utmTerm = null, ?string $utmContent = null, ?string $ref = null, ?array $testVariants = null, ?string $testStartedAt = null, ?string $testCompletedAt = null)
    {
        $this->prefix = $prefix;
        $this->archived = $archived;
        $this->tagIds = $tagIds;
        $this->tagNames = $tagNames;
        $this->proxy = $proxy;
        $this->rewrite = $rewrite;
        $this->doIndex = $doIndex;
        $this->externalId = $externalId;
        $this->tenantId = $tenantId;
        $this->folderId = $folderId;
        $this->comments = $comments;
        $this->expiresAt = $expiresAt;
        $this->expiredUrl = $expiredUrl;
        $this->password = $password;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->video = $video;
        $this->ios = $ios;
        $this->android = $android;
        $this->utmSource = $utmSource;
        $this->utmMedium = $utmMedium;
        $this->utmCampaign = $utmCampaign;
        $this->utmTerm = $utmTerm;
        $this->utmContent = $utmContent;
        $this->ref = $ref;
        $this->testVariants = $testVariants;
        $this->testStartedAt = $testStartedAt;
        $this->testCompletedAt = $testCompletedAt;
    }
}