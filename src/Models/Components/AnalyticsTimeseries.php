<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsTimeseries
{
    /**
     * The starting timestamp of the interval
     *
     * @var string $start
     */
    #[\JMS\Serializer\Annotation\SerializedName('start')]
    public string $start;

    /**
     * The number of clicks in the interval
     *
     * @var ?float $clicks
     */
    #[\JMS\Serializer\Annotation\SerializedName('clicks')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $clicks = null;

    /**
     * The number of leads in the interval
     *
     * @var ?float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $leads = null;

    /**
     * The number of sales in the interval
     *
     * @var ?float $sales
     */
    #[\JMS\Serializer\Annotation\SerializedName('sales')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $sales = null;

    /**
     * The total amount of sales in the interval, in cents
     *
     * @var ?float $saleAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('saleAmount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $saleAmount = null;

    /**
     * @param  string  $start
     * @param  ?float  $clicks
     * @param  ?float  $leads
     * @param  ?float  $sales
     * @param  ?float  $saleAmount
     */
    public function __construct(string $start, ?float $clicks = 0, ?float $leads = 0, ?float $sales = 0, ?float $saleAmount = 0)
    {
        $this->start = $start;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}