<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsRefererUrls
{
    /**
     * The full URL of the referer. If unknown, this will be `(direct)`
     *
     * @var string $refererUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refererUrl')]
    public string $refererUrl;

    /**
     * The number of clicks from this referer to this URL
     *
     * @var ?float $clicks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clicks')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $clicks = null;

    /**
     * The number of leads from this referer to this URL
     *
     * @var ?float $leads
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leads')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $leads = null;

    /**
     * The number of sales from this referer to this URL
     *
     * @var ?float $sales
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $sales = null;

    /**
     * The total amount of sales from this referer to this URL, in cents
     *
     * @var ?float $saleAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('saleAmount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $saleAmount = null;

    /**
     * @param  string  $refererUrl
     * @param  ?float  $clicks
     * @param  ?float  $leads
     * @param  ?float  $sales
     * @param  ?float  $saleAmount
     */
    public function __construct(string $refererUrl, ?float $clicks = 0, ?float $leads = 0, ?float $sales = 0, ?float $saleAmount = 0)
    {
        $this->refererUrl = $refererUrl;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}