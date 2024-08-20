<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class ClicksCountries
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
     * The number of clicks from this country
     *
     * @var float $clicks
     */
    #[\JMS\Serializer\Annotation\SerializedName('clicks')]
    public float $clicks;

    /**
     * @param  ?Country  $country
     * @param  ?float  $clicks
     */
    public function __construct(?Country $country = null, ?float $clicks = null)
    {
        $this->country = $country;
        $this->clicks = $clicks;
    }
}