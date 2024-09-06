<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsCountries
{
    /**
     * The 2-letter ISO 3166-1 country code for the country associated with the location of the user. Learn more: https://d.to/geo
     *
     * @var Country $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\Country')]
    public Country $country;

    /**
     *
     * @var City $city
     */
    #[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\City')]
    public City $city;

    /**
     * The number of clicks from this country
     *
     * @var float $clicks
     */
    #[\JMS\Serializer\Annotation\SerializedName('clicks')]
    public float $clicks;

    /**
     * The number of leads from this country
     *
     * @var float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    public float $leads;

    /**
     * The number of sales from this country
     *
     * @var float $sales
     */
    #[\JMS\Serializer\Annotation\SerializedName('sales')]
    public float $sales;

    /**
     * The total amount of sales from this country
     *
     * @var float $saleAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('saleAmount')]
    public float $saleAmount;

    /**
     * @param  ?Country  $country
     * @param  ?City  $city
     * @param  ?float  $clicks
     * @param  ?float  $leads
     * @param  ?float  $sales
     * @param  ?float  $saleAmount
     */
    public function __construct(?Country $country = null, ?City $city = null, ?float $clicks = null, ?float $leads = null, ?float $sales = null, ?float $saleAmount = null)
    {
        $this->country = $country;
        $this->city = $city;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}