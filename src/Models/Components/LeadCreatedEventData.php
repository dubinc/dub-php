<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class LeadCreatedEventData
{
    /**
     *
     * @var string $eventName
     */
    #[\JMS\Serializer\Annotation\SerializedName('eventName')]
    public string $eventName;

    /**
     *
     * @var Customer $customer
     */
    #[\JMS\Serializer\Annotation\SerializedName('customer')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\Customer')]
    public Customer $customer;

    /**
     *
     * @var LeadCreatedEventClick $click
     */
    #[\JMS\Serializer\Annotation\SerializedName('click')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventClick')]
    public LeadCreatedEventClick $click;

    /**
     *
     * @var LeadCreatedEventLink $link
     */
    #[\JMS\Serializer\Annotation\SerializedName('link')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventLink')]
    public LeadCreatedEventLink $link;

    /**
     * @param  string  $eventName
     * @param  Customer  $customer
     * @param  LeadCreatedEventClick  $click
     * @param  LeadCreatedEventLink  $link
     */
    public function __construct(string $eventName, Customer $customer, LeadCreatedEventClick $click, LeadCreatedEventLink $link)
    {
        $this->eventName = $eventName;
        $this->customer = $customer;
        $this->click = $click;
        $this->link = $link;
    }
}