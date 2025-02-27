<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TrackLeadRequestBody
{
    /**
     * The ID of the click in Dub. You can read this value from `dub_id` cookie.
     *
     * @var string $clickId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clickId')]
    public string $clickId;

    /**
     * The name of the lead event to track.
     *
     * @var string $eventName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventName')]
    public string $eventName;

    /**
     * The numerical value associated with this lead event (e.g., number of provisioned seats in a free trial). If defined as N, the lead event will be tracked N times.
     *
     * @var ?float $eventQuantity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventQuantity')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $eventQuantity = null;

    /**
     * Additional metadata to be stored with the lead event
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
     * The mode to use for tracking the lead event. `async` will not block the request; `wait` will block the request until the lead event is fully recorded in Dub.
     *
     * @var ?Mode $mode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\Mode|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Mode $mode = null;

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
     * Name of the customer in the client's app.
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerName = null;

    /**
     * Email of the customer in the client's app.
     *
     * @var ?string $customerEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerEmail')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerEmail = null;

    /**
     * Avatar of the customer in the client's app.
     *
     * @var ?string $customerAvatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerAvatar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerAvatar = null;

    /**
     * @param  string  $clickId
     * @param  string  $eventName
     * @param  ?string  $externalId
     * @param  ?Mode  $mode
     * @param  ?float  $eventQuantity
     * @param  ?string  $customerId
     * @param  ?string  $customerName
     * @param  ?string  $customerEmail
     * @param  ?string  $customerAvatar
     * @param  ?array<string, mixed>  $metadata
     * @phpstan-pure
     */
    public function __construct(string $clickId, string $eventName, ?float $eventQuantity = null, ?array $metadata = null, ?string $externalId = '', ?Mode $mode = Mode::Async, ?string $customerId = null, ?string $customerName = null, ?string $customerEmail = null, ?string $customerAvatar = null)
    {
        $this->clickId = $clickId;
        $this->eventName = $eventName;
        $this->eventQuantity = $eventQuantity;
        $this->metadata = $metadata;
        $this->externalId = $externalId;
        $this->mode = $mode;
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerAvatar = $customerAvatar;
    }
}