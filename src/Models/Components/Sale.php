<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Sale
{
    /**
     * The amount of the sale. Should be passed in cents.
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     * The payment processor via which the sale was made.
     *
     * @var PaymentProcessor $paymentProcessor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentProcessor')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\PaymentProcessor')]
    public PaymentProcessor $paymentProcessor;

    /**
     * The invoice ID of the sale.
     *
     * @var ?string $invoiceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoiceId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceId = null;

    /**
     * @param  int  $amount
     * @param  PaymentProcessor  $paymentProcessor
     * @param  ?string  $invoiceId
     */
    public function __construct(int $amount, PaymentProcessor $paymentProcessor, ?string $invoiceId = null)
    {
        $this->amount = $amount;
        $this->paymentProcessor = $paymentProcessor;
        $this->invoiceId = $invoiceId;
    }
}