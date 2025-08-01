<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsCities
{
    /**
     * The 2-letter ISO 3166-1 country code of the country where this city is located. Learn more: https://d.to/geo
     *
     * @var string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    public string $country;

    /**
     * The 2-letter ISO 3166-2 region code representing the region associated with the location of the user.
     *
     * @var string $region
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('region')]
    public string $region;

    /**
     * The name of the city
     *
     * @var string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    public string $city;

    /**
     * The number of clicks from this city
     *
     * @var ?float $clicks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clicks')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $clicks = null;

    /**
     * The number of leads from this city
     *
     * @var ?float $leads
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leads')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $leads = null;

    /**
     * The number of sales from this city
     *
     * @var ?float $sales
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $sales = null;

    /**
     * The total amount of sales from this city, in cents
     *
     * @var ?float $saleAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('saleAmount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $saleAmount = null;

    /**
     * @param  string  $country
     * @param  string  $region
     * @param  string  $city
     * @param  ?float  $clicks
     * @param  ?float  $leads
     * @param  ?float  $sales
     * @param  ?float  $saleAmount
     * @phpstan-pure
     */
    public function __construct(string $country, string $region, string $city, ?float $clicks = 0, ?float $leads = 0, ?float $sales = 0, ?float $saleAmount = 0)
    {
        $this->country = $country;
        $this->region = $region;
        $this->city = $city;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}