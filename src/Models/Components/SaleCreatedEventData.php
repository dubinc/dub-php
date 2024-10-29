<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleCreatedEventData
{
    /**
     *
     * @var string $eventName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventName')]
    public string $eventName;

    /**
     *
     * @var SaleCreatedEventCustomer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleCreatedEventCustomer')]
    public SaleCreatedEventCustomer $customer;

    /**
     *
     * @var SaleCreatedEventClick $click
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('click')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleCreatedEventClick')]
    public SaleCreatedEventClick $click;

    /**
     *
     * @var SaleCreatedEventLink $link
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('link')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleCreatedEventLink')]
    public SaleCreatedEventLink $link;

    /**
     *
     * @var Sale $sale
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sale')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\Sale')]
    public Sale $sale;

    /**
     * @param  string  $eventName
     * @param  SaleCreatedEventCustomer  $customer
     * @param  SaleCreatedEventClick  $click
     * @param  SaleCreatedEventLink  $link
     * @param  Sale  $sale
     */
    public function __construct(string $eventName, SaleCreatedEventCustomer $customer, SaleCreatedEventClick $click, SaleCreatedEventLink $link, Sale $sale)
    {
        $this->eventName = $eventName;
        $this->customer = $customer;
        $this->click = $click;
        $this->link = $link;
        $this->sale = $sale;
    }
}