<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsOS
{
    /**
     * The name of the OS
     *
     * @var string $os
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('os')]
    public string $os;

    /**
     * The number of clicks from this OS
     *
     * @var ?float $clicks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clicks')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $clicks = null;

    /**
     * The number of leads from this OS
     *
     * @var ?float $leads
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leads')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $leads = null;

    /**
     * The number of sales from this OS
     *
     * @var ?float $sales
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $sales = null;

    /**
     * The total amount of sales from this OS, in cents
     *
     * @var ?float $saleAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('saleAmount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $saleAmount = null;

    /**
     * @param  string  $os
     * @param  ?float  $clicks
     * @param  ?float  $leads
     * @param  ?float  $sales
     * @param  ?float  $saleAmount
     * @phpstan-pure
     */
    public function __construct(string $os, ?float $clicks = 0, ?float $leads = 0, ?float $sales = 0, ?float $saleAmount = 0)
    {
        $this->os = $os;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}