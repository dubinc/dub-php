<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class RequestBody
{
    /**
     * The destination URL of the short link.
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;

    /**
     * The domain of the short link. If not provided, the primary domain for the workspace will be used (or `dub.sh` if the workspace has no domains).
     *
     * @var ?string $domain
     */
    #[\JMS\Serializer\Annotation\SerializedName('domain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $domain = null;

    /**
     * The short link slug. If not provided, a random 7-character slug will be generated.
     *
     * @var ?string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;

    /**
     * This is the ID of the link in your database. If set, it can be used to identify the link in the future. Must be prefixed with `ext_` when passed as a query parameter.
     *
     * @var ?string $externalId
     */
    #[\JMS\Serializer\Annotation\SerializedName('externalId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $externalId = null;

    /**
     * The prefix of the short link slug for randomly-generated keys (e.g. if prefix is `/c/`, generated keys will be in the `/c/:key` format). Will be ignored if `key` is provided.
     *
     * @var ?string $prefix
     */
    #[\JMS\Serializer\Annotation\SerializedName('prefix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $prefix = null;

    /**
     * Whether to track conversions for the short link.
     *
     * @var ?bool $trackConversion
     */
    #[\JMS\Serializer\Annotation\SerializedName('trackConversion')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $trackConversion = null;

    /**
     * Whether the short link is archived.
     *
     * @var ?bool $archived
     */
    #[\JMS\Serializer\Annotation\SerializedName('archived')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $archived = null;

    /**
     * Whether the short link's stats are publicly accessible.
     *
     * @var ?bool $publicStats
     */
    #[\JMS\Serializer\Annotation\SerializedName('publicStats')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $publicStats = null;

    /**
     * The unique ID of the tag assigned to the short link. This field is deprecated – use `tagIds` instead.
     *
     * @var ?string $tagId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tagId = null;

    /**
     * The unique IDs of the tags assigned to the short link.
     *
     * @var mixed $tagIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagIds')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $tagIds = null;

    /**
     * The unique name of the tags assigned to the short link (case insensitive).
     *
     * @var mixed $tagNames
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagNames')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $tagNames = null;

    /**
     * The comments for the short link.
     *
     * @var ?string $comments
     */
    #[\JMS\Serializer\Annotation\SerializedName('comments')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $comments = null;

    /**
     * The date and time when the short link will expire at.
     *
     * @var ?string $expiresAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiresAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiresAt = null;

    /**
     * The URL to redirect to when the short link has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiredUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiredUrl = null;

    /**
     * The password required to access the destination URL of the short link.
     *
     * @var ?string $password
     */
    #[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $password = null;

    /**
     * Whether the short link uses Custom Social Media Cards feature.
     *
     * @var ?bool $proxy
     */
    #[\JMS\Serializer\Annotation\SerializedName('proxy')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $proxy = null;

    /**
     * The custom link preview title (og:title). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    /**
     * The custom link preview description (og:description). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    /**
     * The custom link preview image (og:image). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $image
     */
    #[\JMS\Serializer\Annotation\SerializedName('image')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $image = null;

    /**
     * The custom link preview video (og:video). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $video
     */
    #[\JMS\Serializer\Annotation\SerializedName('video')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $video = null;

    /**
     * Whether the short link uses link cloaking.
     *
     * @var ?bool $rewrite
     */
    #[\JMS\Serializer\Annotation\SerializedName('rewrite')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $rewrite = null;

    /**
     * The iOS destination URL for the short link for iOS device targeting.
     *
     * @var ?string $ios
     */
    #[\JMS\Serializer\Annotation\SerializedName('ios')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ios = null;

    /**
     * The Android destination URL for the short link for Android device targeting.
     *
     * @var ?string $android
     */
    #[\JMS\Serializer\Annotation\SerializedName('android')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $android = null;

    /**
     * Geo targeting information for the short link in JSON format `{[COUNTRY]: https://example.com }`.
     *
     * @var ?\Dub\Models\Components\LinkGeoTargeting $geo
     */
    #[\JMS\Serializer\Annotation\SerializedName('geo')]
    #[\JMS\Serializer\Annotation\Type('Dub\Models\Components\LinkGeoTargeting')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\Dub\Models\Components\LinkGeoTargeting $geo = null;

    /**
     * Allow search engines to index your short link. Defaults to `false` if not provided. Learn more: https://d.to/noindex
     *
     * @var ?bool $doIndex
     */
    #[\JMS\Serializer\Annotation\SerializedName('doIndex')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $doIndex = null;

    public function __construct()
    {
        $this->url = '';
        $this->domain = null;
        $this->key = null;
        $this->externalId = null;
        $this->prefix = null;
        $this->trackConversion = null;
        $this->archived = null;
        $this->publicStats = null;
        $this->tagId = null;
        $this->tagIds = null;
        $this->tagNames = null;
        $this->comments = null;
        $this->expiresAt = null;
        $this->expiredUrl = null;
        $this->password = null;
        $this->proxy = null;
        $this->title = null;
        $this->description = null;
        $this->image = null;
        $this->video = null;
        $this->rewrite = null;
        $this->ios = null;
        $this->android = null;
        $this->geo = null;
        $this->doIndex = null;
    }
}