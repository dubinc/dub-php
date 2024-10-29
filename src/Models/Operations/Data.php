<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Models\Components;
class Data
{
    /**
     * The destination URL of the short link.
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * Whether to track conversions for the short link.
     *
     * @var ?bool $trackConversion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('trackConversion')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $trackConversion = null;

    /**
     * Whether the short link is archived.
     *
     * @var ?bool $archived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     * Deprecated: Use `dashboard` instead. Whether the short link's stats are publicly accessible.
     *
     * @var ?bool $publicStats
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publicStats')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $publicStats = null;

    /**
     * The unique ID of the tag assigned to the short link. This field is deprecated – use `tagIds` instead.
     *
     * @var ?string $tagId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tagId = null;

    /**
     * The unique IDs of the tags assigned to the short link.
     *
     * @var string|array<string>|null $tagIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagIds')]
    #[\Speakeasy\Serializer\Annotation\Type('string|array<string>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|array|null $tagIds = null;

    /**
     * The unique name of the tags assigned to the short link (case insensitive).
     *
     * @var string|array<string>|null $tagNames
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagNames')]
    #[\Speakeasy\Serializer\Annotation\Type('string|array<string>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|array|null $tagNames = null;

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
     * Whether the short link uses Custom Social Media Cards feature.
     *
     * @var ?bool $proxy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proxy')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $proxy = null;

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
     * Whether the short link uses link cloaking.
     *
     * @var ?bool $rewrite
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rewrite')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $rewrite = null;

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
     * Geo targeting information for the short link in JSON format `{[COUNTRY]: https://example.com }`.
     *
     * @var ?Components\LinkGeoTargeting $geo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('geo')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\LinkGeoTargeting|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\LinkGeoTargeting $geo = null;

    /**
     * Allow search engines to index your short link. Defaults to `false` if not provided. Learn more: https://d.to/noindex
     *
     * @var ?bool $doIndex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('doIndex')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $doIndex = null;

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
     * An array of webhook IDs to trigger when the link is clicked. These webhooks will receive click event data.
     *
     * @var ?array<string> $webhookIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhookIds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $webhookIds = null;

    /**
     * @param  ?string  $url
     * @param  ?bool  $trackConversion
     * @param  ?bool  $archived
     * @param  ?bool  $publicStats
     * @param  string|array<string>|null  $tagIds
     * @param  string|array<string>|null  $tagNames
     * @param  ?bool  $proxy
     * @param  ?bool  $rewrite
     * @param  ?bool  $doIndex
     * @param  ?string  $tagId
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
     * @param  ?Components\LinkGeoTargeting  $geo
     * @param  ?string  $utmSource
     * @param  ?string  $utmMedium
     * @param  ?string  $utmCampaign
     * @param  ?string  $utmTerm
     * @param  ?string  $utmContent
     * @param  ?string  $ref
     * @param  ?array<string>  $webhookIds
     */
    public function __construct(?string $url = null, string|array|null $tagIds = null, string|array|null $tagNames = null, ?string $tagId = null, ?string $comments = null, ?string $expiresAt = null, ?string $expiredUrl = null, ?string $password = null, ?string $title = null, ?string $description = null, ?string $image = null, ?string $video = null, ?string $ios = null, ?string $android = null, ?Components\LinkGeoTargeting $geo = null, ?string $utmSource = null, ?string $utmMedium = null, ?string $utmCampaign = null, ?string $utmTerm = null, ?string $utmContent = null, ?string $ref = null, ?array $webhookIds = null, ?bool $trackConversion = false, ?bool $archived = false, ?bool $publicStats = false, ?bool $proxy = false, ?bool $rewrite = false, ?bool $doIndex = false)
    {
        $this->url = $url;
        $this->trackConversion = $trackConversion;
        $this->archived = $archived;
        $this->publicStats = $publicStats;
        $this->tagIds = $tagIds;
        $this->tagNames = $tagNames;
        $this->proxy = $proxy;
        $this->rewrite = $rewrite;
        $this->doIndex = $doIndex;
        $this->tagId = $tagId;
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
        $this->geo = $geo;
        $this->utmSource = $utmSource;
        $this->utmMedium = $utmMedium;
        $this->utmCampaign = $utmCampaign;
        $this->utmTerm = $utmTerm;
        $this->utmContent = $utmContent;
        $this->ref = $ref;
        $this->webhookIds = $webhookIds;
    }
}