<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class LeadCreatedEventLink
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
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var string $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiresAt')]
    public string $expiresAt;

    /**
     * The IDs of the webhooks that the short link is associated with.
     *
     * @var array<string> $webhookIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhookIds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $webhookIds;

    /**
     * The full URL of the short link, including the https protocol (e.g. `https://dub.sh/try`).
     *
     * @var string $shortLink
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shortLink')]
    public string $shortLink;

    /**
     * The full URL of the QR code for the short link (e.g. `https://api.dub.co/qr?url=https://dub.sh/try`).
     *
     * @var string $qrCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('qrCode')]
    public string $qrCode;

    /**
     * The workspace ID of the short link.
     *
     * @var string $workspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspaceId')]
    public string $workspaceId;

    /**
     *
     * @var string $lastClicked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastClicked')]
    public string $lastClicked;

    /**
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public string $updatedAt;

    /**
     * The project ID of the short link. This field is deprecated – use `workspaceId` instead.
     *
     * @var string $projectId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('projectId')]
    public string $projectId;

    /**
     *
     * @var ?bool $trackConversion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('trackConversion')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $trackConversion = null;

    /**
     * The ID of the link in your database. If set, it can be used to identify the link in future API requests (must be prefixed with 'ext_' when passed as a query parameter). This key is unique across your workspace.
     *
     * @var ?string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('externalId')]
    public ?string $externalId;

    /**
     * The ID of the tenant that created the link inside your system. If set, it can be used to fetch all links for a tenant.
     *
     * @var ?string $tenantId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tenantId')]
    public ?string $tenantId;

    /**
     * The ID of the program the short link is associated with.
     *
     * @var ?string $programId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('programId')]
    public ?string $programId;

    /**
     * The ID of the partner the short link is associated with.
     *
     * @var ?string $partnerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnerId')]
    public ?string $partnerId;

    /**
     *
     * @var ?bool $archived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     *
     * @var ?string $expiredUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiredUrl')]
    public ?string $expiredUrl;

    /**
     * The password required to access the destination URL of the short link.
     *
     * @var ?string $password
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('password')]
    public ?string $password;

    /**
     *
     * @var ?bool $proxy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proxy')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $proxy = null;

    /**
     * The title of the short link generated via `api.dub.co/metatags`. Will be used for Custom Social Media Cards if `proxy` is true.
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public ?string $title;

    /**
     * The description of the short link generated via `api.dub.co/metatags`. Will be used for Custom Social Media Cards if `proxy` is true.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public ?string $description;

    /**
     * The image of the short link generated via `api.dub.co/metatags`. Will be used for Custom Social Media Cards if `proxy` is true.
     *
     * @var ?string $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image')]
    public ?string $image;

    /**
     * The custom link preview video (og:video). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $video
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('video')]
    public ?string $video;

    /**
     *
     * @var ?bool $rewrite
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rewrite')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $rewrite = null;

    /**
     *
     * @var ?bool $doIndex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('doIndex')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $doIndex = null;

    /**
     * The iOS destination URL for the short link for iOS device targeting.
     *
     * @var ?string $ios
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ios')]
    public ?string $ios;

    /**
     * The Android destination URL for the short link for Android device targeting.
     *
     * @var ?string $android
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('android')]
    public ?string $android;

    /**
     * Geo targeting information for the short link in JSON format `{[COUNTRY]: https://example.com }`. Learn more: https://d.to/geo
     *
     * @var ?LeadCreatedEventGeo $geo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('geo')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventGeo|null')]
    public ?LeadCreatedEventGeo $geo;

    /**
     *
     * @var ?bool $publicStats
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publicStats')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $publicStats = null;

    /**
     * The unique ID of the tag assigned to the short link. This field is deprecated – use `tags` instead.
     *
     * @var ?string $tagId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagId')]
    public ?string $tagId;

    /**
     * The tags assigned to the short link.
     *
     * @var ?array<TagSchema> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Dub\Models\Components\TagSchema>|null')]
    public ?array $tags;

    /**
     * The unique ID of the folder assigned to the short link.
     *
     * @var ?string $folderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('folderId')]
    public ?string $folderId;

    /**
     * The comments for the short link.
     *
     * @var ?string $comments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('comments')]
    public ?string $comments;

    /**
     * The UTM source of the short link.
     *
     * @var ?string $utmSource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_source')]
    public ?string $utmSource;

    /**
     * The UTM medium of the short link.
     *
     * @var ?string $utmMedium
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_medium')]
    public ?string $utmMedium;

    /**
     * The UTM campaign of the short link.
     *
     * @var ?string $utmCampaign
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_campaign')]
    public ?string $utmCampaign;

    /**
     * The UTM term of the short link.
     *
     * @var ?string $utmTerm
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_term')]
    public ?string $utmTerm;

    /**
     * The UTM content of the short link.
     *
     * @var ?string $utmContent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utm_content')]
    public ?string $utmContent;

    /**
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('userId')]
    public ?string $userId;

    /**
     * The number of clicks on the short link.
     *
     * @var ?float $clicks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clicks')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $clicks = null;

    /**
     * The number of leads the short links has generated.
     *
     * @var ?float $leads
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leads')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $leads = null;

    /**
     * The number of sales the short links has generated.
     *
     * @var ?float $sales
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $sales = null;

    /**
     * The total dollar amount of sales the short links has generated (in cents).
     *
     * @var ?float $saleAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('saleAmount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $saleAmount = null;

    /**
     * @param  string  $id
     * @param  string  $domain
     * @param  string  $key
     * @param  string  $url
     * @param  string  $expiresAt
     * @param  array<string>  $webhookIds
     * @param  string  $shortLink
     * @param  string  $qrCode
     * @param  string  $workspaceId
     * @param  string  $lastClicked
     * @param  string  $createdAt
     * @param  string  $updatedAt
     * @param  string  $projectId
     * @param  ?bool  $trackConversion
     * @param  ?string  $externalId
     * @param  ?string  $tenantId
     * @param  ?string  $programId
     * @param  ?string  $partnerId
     * @param  ?bool  $archived
     * @param  ?string  $expiredUrl
     * @param  ?string  $password
     * @param  ?bool  $proxy
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?string  $image
     * @param  ?string  $video
     * @param  ?bool  $rewrite
     * @param  ?bool  $doIndex
     * @param  ?string  $ios
     * @param  ?string  $android
     * @param  ?LeadCreatedEventGeo  $geo
     * @param  ?bool  $publicStats
     * @param  ?string  $tagId
     * @param  ?array<TagSchema>  $tags
     * @param  ?string  $folderId
     * @param  ?string  $comments
     * @param  ?string  $utmSource
     * @param  ?string  $utmMedium
     * @param  ?string  $utmCampaign
     * @param  ?string  $utmTerm
     * @param  ?string  $utmContent
     * @param  ?string  $userId
     * @param  ?float  $clicks
     * @param  ?float  $leads
     * @param  ?float  $sales
     * @param  ?float  $saleAmount
     * @phpstan-pure
     */
    public function __construct(string $id, string $domain, string $key, string $url, string $expiresAt, array $webhookIds, string $shortLink, string $qrCode, string $workspaceId, string $lastClicked, string $createdAt, string $updatedAt, string $projectId, ?bool $trackConversion = null, ?string $externalId = null, ?string $tenantId = null, ?string $programId = null, ?string $partnerId = null, ?bool $archived = null, ?string $expiredUrl = null, ?string $password = null, ?bool $proxy = null, ?string $title = null, ?string $description = null, ?string $image = null, ?string $video = null, ?bool $rewrite = null, ?bool $doIndex = null, ?string $ios = null, ?string $android = null, ?LeadCreatedEventGeo $geo = null, ?bool $publicStats = null, ?string $tagId = null, ?array $tags = null, ?string $folderId = null, ?string $comments = null, ?string $utmSource = null, ?string $utmMedium = null, ?string $utmCampaign = null, ?string $utmTerm = null, ?string $utmContent = null, ?string $userId = null, ?float $clicks = 0, ?float $leads = 0, ?float $sales = 0, ?float $saleAmount = 0)
    {
        $this->id = $id;
        $this->domain = $domain;
        $this->key = $key;
        $this->url = $url;
        $this->expiresAt = $expiresAt;
        $this->webhookIds = $webhookIds;
        $this->shortLink = $shortLink;
        $this->qrCode = $qrCode;
        $this->workspaceId = $workspaceId;
        $this->lastClicked = $lastClicked;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->projectId = $projectId;
        $this->trackConversion = $trackConversion;
        $this->externalId = $externalId;
        $this->tenantId = $tenantId;
        $this->programId = $programId;
        $this->partnerId = $partnerId;
        $this->archived = $archived;
        $this->expiredUrl = $expiredUrl;
        $this->password = $password;
        $this->proxy = $proxy;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->video = $video;
        $this->rewrite = $rewrite;
        $this->doIndex = $doIndex;
        $this->ios = $ios;
        $this->android = $android;
        $this->geo = $geo;
        $this->publicStats = $publicStats;
        $this->tagId = $tagId;
        $this->tags = $tags;
        $this->folderId = $folderId;
        $this->comments = $comments;
        $this->utmSource = $utmSource;
        $this->utmMedium = $utmMedium;
        $this->utmCampaign = $utmCampaign;
        $this->utmTerm = $utmTerm;
        $this->utmContent = $utmContent;
        $this->userId = $userId;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}