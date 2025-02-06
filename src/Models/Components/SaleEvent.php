<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleEvent
{
    /**
     *
     * @var SaleEventEvent $event
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleEventEvent')]
    public SaleEventEvent $event;

    /**
     *
     * @var string $eventId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventId')]
    public string $eventId;

    /**
     *
     * @var string $eventName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventName')]
    public string $eventName;

    /**
     *
     * @var SaleEventLink $link
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('link')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleEventLink')]
    public SaleEventLink $link;

    /**
     *
     * @var SaleEventClick $click
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('click')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleEventClick')]
    public SaleEventClick $click;

    /**
     *
     * @var SaleEventCustomer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\SaleEventCustomer')]
    public SaleEventCustomer $customer;

    /**
     *
     * @var Sale $sale
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sale')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\Sale')]
    public Sale $sale;

    /**
     * Deprecated. Use `sale.amount` instead.
     *
     * @var float $saleAmount
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('saleAmount')]
    public float $saleAmount;

    /**
     * Deprecated. Use `sale.invoiceId` instead.
     *
     * @var string $invoiceId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_id')]
    public string $invoiceId;

    /**
     * Deprecated. Use `sale.paymentProcessor` instead.
     *
     * @var string $paymentProcessor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_processor')]
    public string $paymentProcessor;

    /**
     * Deprecated. Use `click.id` instead.
     *
     * @var string $clickId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('click_id')]
    public string $clickId;

    /**
     * Deprecated. Use `link.id` instead.
     *
     * @var string $linkId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('link_id')]
    public string $linkId;

    /**
     * Deprecated. Use `link.domain` instead.
     *
     * @var string $domain
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domain')]
    public string $domain;

    /**
     * Deprecated. Use `link.key` instead.
     *
     * @var string $key
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     * Deprecated. Use `click.url` instead.
     *
     * @var string $url
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * Deprecated. Use `click.continent` instead.
     *
     * @var string $continent
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('continent')]
    public string $continent;

    /**
     * Deprecated. Use `click.country` instead.
     *
     * @var string $country
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    public string $country;

    /**
     * Deprecated. Use `click.city` instead.
     *
     * @var string $city
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    public string $city;

    /**
     * Deprecated. Use `click.device` instead.
     *
     * @var string $device
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('device')]
    public string $device;

    /**
     * Deprecated. Use `click.browser` instead.
     *
     * @var string $browser
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('browser')]
    public string $browser;

    /**
     * Deprecated. Use `click.os` instead.
     *
     * @var string $os
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('os')]
    public string $os;

    /**
     * Deprecated. Use `click.qr` instead.
     *
     * @var float $qr
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('qr')]
    public float $qr;

    /**
     * Deprecated. Use `click.ip` instead.
     *
     * @var string $ip
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ip')]
    public string $ip;

    /**
     *
     * @var ?string $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $timestamp = null;

    /**
     * @param  SaleEventEvent  $event
     * @param  string  $eventId
     * @param  string  $eventName
     * @param  SaleEventLink  $link
     * @param  SaleEventClick  $click
     * @param  SaleEventCustomer  $customer
     * @param  Sale  $sale
     * @param  float  $saleAmount
     * @param  string  $invoiceId
     * @param  string  $paymentProcessor
     * @param  string  $clickId
     * @param  string  $linkId
     * @param  string  $domain
     * @param  string  $key
     * @param  string  $url
     * @param  string  $continent
     * @param  string  $country
     * @param  string  $city
     * @param  string  $device
     * @param  string  $browser
     * @param  string  $os
     * @param  float  $qr
     * @param  string  $ip
     * @param  ?string  $timestamp
     * @phpstan-pure
     */
    public function __construct(SaleEventEvent $event, string $eventId, string $eventName, SaleEventLink $link, SaleEventClick $click, SaleEventCustomer $customer, Sale $sale, float $saleAmount, string $invoiceId, string $paymentProcessor, string $clickId, string $linkId, string $domain, string $key, string $url, string $continent, string $country, string $city, string $device, string $browser, string $os, float $qr, string $ip, ?string $timestamp = null)
    {
        $this->event = $event;
        $this->eventId = $eventId;
        $this->eventName = $eventName;
        $this->link = $link;
        $this->click = $click;
        $this->customer = $customer;
        $this->sale = $sale;
        $this->saleAmount = $saleAmount;
        $this->invoiceId = $invoiceId;
        $this->paymentProcessor = $paymentProcessor;
        $this->clickId = $clickId;
        $this->linkId = $linkId;
        $this->domain = $domain;
        $this->key = $key;
        $this->url = $url;
        $this->continent = $continent;
        $this->country = $country;
        $this->city = $city;
        $this->device = $device;
        $this->browser = $browser;
        $this->os = $os;
        $this->qr = $qr;
        $this->ip = $ip;
        $this->timestamp = $timestamp;
    }
}