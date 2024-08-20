<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class LeadsTopLinks
{
    /**
     * The unique ID of the short link
     *
     * @var string $link
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('link')]
    public string $link;

    /**
     * The unique ID of the short link
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The domain of the short link
     *
     * @var string $domain
     */
    #[\JMS\Serializer\Annotation\SerializedName('domain')]
    public string $domain;

    /**
     * The key of the short link
     *
     * @var string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     * The short link URL
     *
     * @var string $shortLink
     */
    #[\JMS\Serializer\Annotation\SerializedName('shortLink')]
    public string $shortLink;

    /**
     * The destination URL of the short link
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * The creation timestamp of the short link
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * The number of leads from this link
     *
     * @var float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    public float $leads;

    /**
     * @param  ?string  $link
     * @param  ?string  $id
     * @param  ?string  $domain
     * @param  ?string  $key
     * @param  ?string  $shortLink
     * @param  ?string  $url
     * @param  ?string  $createdAt
     * @param  ?float  $leads
     */
    public function __construct(?string $link = null, ?string $id = null, ?string $domain = null, ?string $key = null, ?string $shortLink = null, ?string $url = null, ?string $createdAt = null, ?float $leads = null)
    {
        $this->link = $link;
        $this->id = $id;
        $this->domain = $domain;
        $this->key = $key;
        $this->shortLink = $shortLink;
        $this->url = $url;
        $this->createdAt = $createdAt;
        $this->leads = $leads;
    }
}