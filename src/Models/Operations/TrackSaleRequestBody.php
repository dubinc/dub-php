<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TrackSaleRequestBody
{
    /**
     * This is the unique identifier for the customer in the client's app. This is used to track the customer's journey.
     *
     * @var string $customerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $customerId;

    /**
     * The amount of the sale. Should be passed in cents.
     *
     * @var int $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $amount;

    /**
     * The payment processor via which the sale was made.
     *
     * @var \Dub\Models\Operations\PaymentProcessor $paymentProcessor
     */
    #[\JMS\Serializer\Annotation\SerializedName('paymentProcessor')]
    #[\JMS\Serializer\Annotation\Type('enum<Dub\Models\Operations\PaymentProcessor>')]
    public PaymentProcessor $paymentProcessor;

    /**
     * The invoice ID of the sale.
     *
     * @var ?string $invoiceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('invoiceId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $invoiceId = null;

    /**
     * The currency of the sale. Accepts ISO 4217 currency codes.
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     * Additional metadata to be stored with the sale event.
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    public function __construct()
    {
        $this->customerId = '';
        $this->amount = 0;
        $this->paymentProcessor = \Dub\Models\Operations\PaymentProcessor::Stripe;
        $this->invoiceId = null;
        $this->currency = null;
        $this->metadata = null;
    }
}