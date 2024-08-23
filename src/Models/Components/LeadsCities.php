<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class LeadsCities
{
    /**
     * The name of the city
     *
     * @var string $city
     */
    #[\JMS\Serializer\Annotation\SerializedName('city')]
    public string $city;

    /**
     * The 2-letter country code of the city: https://d.to/geo
     *
     * @var LeadsCitiesCountry $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LeadsCitiesCountry')]
    public LeadsCitiesCountry $country;

    /**
     * The number of leads from this city
     *
     * @var float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    public float $leads;

    /**
     * @param  ?string  $city
     * @param  ?LeadsCitiesCountry  $country
     * @param  ?float  $leads
     */
    public function __construct(?string $city = null, ?LeadsCitiesCountry $country = null, ?float $leads = null)
    {
        $this->city = $city;
        $this->country = $country;
        $this->leads = $leads;
    }
}