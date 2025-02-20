<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TrackSaleRequestBody
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
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\PaymentProcessor')]
    public PaymentProcessor $paymentProcessor;

    /**
     * Additional metadata to be stored with the sale event.
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * This is the unique identifier for the customer in the client's app. This is used to track the customer's journey.
     *
     * @var ?string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('externalId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalId = null;

    /**
     * The name of the sale event. It can be used to track different types of event for example 'Purchase', 'Upgrade', 'Payment', etc.
     *
     * @var ?string $eventName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $eventName = null;

    /**
     * The currency of the sale. Accepts ISO 4217 currency codes.
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * This is the unique identifier for the customer in the client's app. This is used to track the customer's journey.
     *
     * @var ?string $customerId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     * The invoice ID of the sale.
     *
     * @var ?string $invoiceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoiceId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceId = null;

    /**
     * The name of the lead event that occurred before the sale (case-sensitive). This is used to associate the sale event with a particular lead event (instead of the latest lead event, which is the default behavior).
     *
     * @var ?string $leadEventName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leadEventName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $leadEventName = null;

    /**
     * @param  int  $amount
     * @param  PaymentProcessor  $paymentProcessor
     * @param  ?string  $externalId
     * @param  ?string  $eventName
     * @param  ?string  $currency
     * @param  ?string  $customerId
     * @param  ?string  $invoiceId
     * @param  ?array<string, mixed>  $metadata
     * @param  ?string  $leadEventName
     * @phpstan-pure
     */
    public function __construct(int $amount, PaymentProcessor $paymentProcessor, ?array $metadata = null, ?string $externalId = '', ?string $eventName = 'Purchase', ?string $currency = 'usd', ?string $customerId = null, ?string $invoiceId = null, ?string $leadEventName = null)
    {
        $this->amount = $amount;
        $this->paymentProcessor = $paymentProcessor;
        $this->metadata = $metadata;
        $this->externalId = $externalId;
        $this->eventName = $eventName;
        $this->currency = $currency;
        $this->customerId = $customerId;
        $this->invoiceId = $invoiceId;
        $this->leadEventName = $leadEventName;
    }
}