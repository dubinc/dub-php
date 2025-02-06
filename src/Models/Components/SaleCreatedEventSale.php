<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleCreatedEventSale
{
    /**
     *
     * @var float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public float $amount;

    /**
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     *
     * @var string $paymentProcessor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentProcessor')]
    public string $paymentProcessor;

    /**
     *
     * @var ?string $invoiceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoiceId')]
    public ?string $invoiceId;

    /**
     * @param  float  $amount
     * @param  string  $currency
     * @param  string  $paymentProcessor
     * @param  ?string  $invoiceId
     * @phpstan-pure
     */
    public function __construct(float $amount, string $currency, string $paymentProcessor, ?string $invoiceId = null)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->paymentProcessor = $paymentProcessor;
        $this->invoiceId = $invoiceId;
    }
}