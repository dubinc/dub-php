<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** TrackLeadResponseBody - A lead was tracked. */
class TrackLeadResponseBody
{
    /**
     *
     * @var Click $click
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('click')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\Click')]
    public Click $click;

    /**
     *
     * @var Customer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\Customer')]
    public Customer $customer;

    /**
     * @param  Click  $click
     * @param  Customer  $customer
     */
    public function __construct(Click $click, Customer $customer)
    {
        $this->click = $click;
        $this->customer = $customer;
    }
}