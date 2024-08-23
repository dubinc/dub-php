<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SalesCountries
{
    /**
     * The 2-letter ISO 3166-1 country code for the country associated with the location of the user. Learn more: https://d.to/geo
     *
     * @var SalesCountriesCountry $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\SalesCountriesCountry')]
    public SalesCountriesCountry $country;

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
     * @var float $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    public float $amount;

    /**
     * @param  ?SalesCountriesCountry  $country
     * @param  ?float  $sales
     * @param  ?float  $amount
     */
    public function __construct(?SalesCountriesCountry $country = null, ?float $sales = null, ?float $amount = null)
    {
        $this->country = $country;
        $this->sales = $sales;
        $this->amount = $amount;
    }
}