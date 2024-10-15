<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleCreatedEventLink
{
    /**
     * The unique ID of the short link.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The domain of the short link. If not provided, the primary domain for the workspace will be used (or `dub.sh` if the workspace has no domains).
     *
     * @var string $domain
     */
    #[\JMS\Serializer\Annotation\SerializedName('domain')]
    public string $domain;

    /**
     * The short link slug. If not provided, a random 7-character slug will be generated.
     *
     * @var string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var ?bool $trackConversion
     */
    #[\JMS\Serializer\Annotation\SerializedName('trackConversion')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $trackConversion = null;

    /**
     * This is the ID of the link in your database that is unique across your workspace. If set, it can be used to identify the link in future API requests. Must be prefixed with 'ext_' when passed as a query parameter.
     *
     * @var ?string $externalId
     */
    #[\JMS\Serializer\Annotation\SerializedName('externalId')]
    public ?string $externalId;

    /**
     * The identifier of the short link that is unique across your workspace. If set, it can be used to identify your short link for client-side click tracking.
     *
     * @var ?string $identifier
     */
    #[\JMS\Serializer\Annotation\SerializedName('identifier')]
    public ?string $identifier;

    /**
     *
     * @var ?bool $archived
     */
    #[\JMS\Serializer\Annotation\SerializedName('archived')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     *
     * @var string $expiresAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiresAt')]
    public string $expiresAt;

    /**
     * The URL to redirect to when the short link has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiredUrl')]
    public ?string $expiredUrl;

    /**
     * The password required to access the destination URL of the short link.
     *
     * @var ?string $password
     */
    #[\JMS\Serializer\Annotation\SerializedName('password')]
    public ?string $password;

    /**
     *
     * @var ?bool $proxy
     */
    #[\JMS\Serializer\Annotation\SerializedName('proxy')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $proxy = null;

    /**
     * The title of the short link generated via `api.dub.co/metatags`. Will be used for Custom Social Media Cards if `proxy` is true.
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    public ?string $title;

    /**
     * The description of the short link generated via `api.dub.co/metatags`. Will be used for Custom Social Media Cards if `proxy` is true.
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    public ?string $description;

    /**
     * The image of the short link generated via `api.dub.co/metatags`. Will be used for Custom Social Media Cards if `proxy` is true.
     *
     * @var ?string $image
     */
    #[\JMS\Serializer\Annotation\SerializedName('image')]
    public ?string $image;

    /**
     * The custom link preview video (og:video). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $video
     */
    #[\JMS\Serializer\Annotation\SerializedName('video')]
    public ?string $video;

    /**
     *
     * @var ?bool $rewrite
     */
    #[\JMS\Serializer\Annotation\SerializedName('rewrite')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $rewrite = null;

    /**
     *
     * @var ?bool $doIndex
     */
    #[\JMS\Serializer\Annotation\SerializedName('doIndex')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $doIndex = null;

    /**
     * The iOS destination URL for the short link for iOS device targeting.
     *
     * @var ?string $ios
     */
    #[\JMS\Serializer\Annotation\SerializedName('ios')]
    public ?string $ios;

    /**
     * The Android destination URL for the short link for Android device targeting.
     *
     * @var ?string $android
     */
    #[\JMS\Serializer\Annotation\SerializedName('android')]
    public ?string $android;

    /**
     * Geo targeting information for the short link in JSON format `{[COUNTRY]: https://example.com }`. Learn more: https://d.to/geo
     *
     * @var ?SaleCreatedEventGeo $geo
     */
    #[\JMS\Serializer\Annotation\SerializedName('geo')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\SaleCreatedEventGeo|null')]
    public ?SaleCreatedEventGeo $geo;

    /**
     *
     * @var ?bool $publicStats
     */
    #[\JMS\Serializer\Annotation\SerializedName('publicStats')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $publicStats = null;

    /**
     * The unique ID of the tag assigned to the short link. This field is deprecated – use `tags` instead.
     *
     * @var ?string $tagId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagId')]
    public ?string $tagId;

    /**
     * The tags assigned to the short link.
     *
     * @var ?array<TagSchema> $tags
     */
    #[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<\Dub\Models\Components\TagSchema>|null')]
    public ?array $tags;

    /**
     * The IDs of the webhooks that the short link is associated with.
     *
     * @var array<string> $webhookIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('webhookIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $webhookIds;

    /**
     * The comments for the short link.
     *
     * @var ?string $comments
     */
    #[\JMS\Serializer\Annotation\SerializedName('comments')]
    public ?string $comments;

    /**
     * The full URL of the short link, including the https protocol (e.g. `https://dub.sh/try`).
     *
     * @var string $shortLink
     */
    #[\JMS\Serializer\Annotation\SerializedName('shortLink')]
    public string $shortLink;

    /**
     * The full URL of the QR code for the short link (e.g. `https://api.dub.co/qr?url=https://dub.sh/try`).
     *
     * @var string $qrCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('qrCode')]
    public string $qrCode;

    /**
     * The UTM source of the short link.
     *
     * @var ?string $utmSource
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_source')]
    public ?string $utmSource;

    /**
     * The UTM medium of the short link.
     *
     * @var ?string $utmMedium
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_medium')]
    public ?string $utmMedium;

    /**
     * The UTM campaign of the short link.
     *
     * @var ?string $utmCampaign
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_campaign')]
    public ?string $utmCampaign;

    /**
     * The UTM term of the short link.
     *
     * @var ?string $utmTerm
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_term')]
    public ?string $utmTerm;

    /**
     * The UTM content of the short link.
     *
     * @var ?string $utmContent
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_content')]
    public ?string $utmContent;

    /**
     *
     * @var ?string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('userId')]
    public ?string $userId;

    /**
     * The workspace ID of the short link.
     *
     * @var string $workspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('workspaceId')]
    public string $workspaceId;

    /**
     * The number of clicks on the short link.
     *
     * @var ?float $clicks
     */
    #[\JMS\Serializer\Annotation\SerializedName('clicks')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $clicks = null;

    /**
     *
     * @var string $lastClicked
     */
    #[\JMS\Serializer\Annotation\SerializedName('lastClicked')]
    public string $lastClicked;

    /**
     * [BETA]: The number of leads the short links has generated.
     *
     * @var ?float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $leads = null;

    /**
     * [BETA]: The number of sales the short links has generated.
     *
     * @var ?float $sales
     */
    #[\JMS\Serializer\Annotation\SerializedName('sales')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $sales = null;

    /**
     * [BETA]: The total dollar amount of sales the short links has generated (in cents).
     *
     * @var ?float $saleAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('saleAmount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $saleAmount = null;

    /**
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    public string $updatedAt;

    /**
     * The project ID of the short link. This field is deprecated – use `workspaceId` instead.
     *
     * @var string $projectId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('projectId')]
    public string $projectId;

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
     * @param  ?string  $identifier
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
     * @param  ?SaleCreatedEventGeo  $geo
     * @param  ?bool  $publicStats
     * @param  ?string  $tagId
     * @param  ?array<TagSchema>  $tags
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
     */
    public function __construct(string $id, string $domain, string $key, string $url, string $expiresAt, array $webhookIds, string $shortLink, string $qrCode, string $workspaceId, string $lastClicked, string $createdAt, string $updatedAt, string $projectId, ?bool $trackConversion = null, ?string $externalId = null, ?string $identifier = null, ?bool $archived = null, ?string $expiredUrl = null, ?string $password = null, ?bool $proxy = null, ?string $title = null, ?string $description = null, ?string $image = null, ?string $video = null, ?bool $rewrite = null, ?bool $doIndex = null, ?string $ios = null, ?string $android = null, ?SaleCreatedEventGeo $geo = null, ?bool $publicStats = null, ?string $tagId = null, ?array $tags = null, ?string $comments = null, ?string $utmSource = null, ?string $utmMedium = null, ?string $utmCampaign = null, ?string $utmTerm = null, ?string $utmContent = null, ?string $userId = null, ?float $clicks = 0, ?float $leads = 0, ?float $sales = 0, ?float $saleAmount = 0)
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
        $this->identifier = $identifier;
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