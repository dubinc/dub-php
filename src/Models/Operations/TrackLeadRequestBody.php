<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TrackLeadRequestBody
{
    /**
     * The ID of the click in th Dub. You can read this value from `dclid` cookie.
     *
     * @var string $clickId
     */
    #[\JMS\Serializer\Annotation\SerializedName('clickId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $clickId;

    /**
     * The name of the event to track.
     *
     * @var string $eventName
     */
    #[\JMS\Serializer\Annotation\SerializedName('eventName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $eventName;

    /**
     * This is the unique identifier for the customer in the client's app. This is used to track the customer's journey.
     *
     * @var string $customerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $customerId;

    /**
     * Name of the customer in the client's app.
     *
     * @var ?string $customerName
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerName = null;

    /**
     * Email of the customer in the client's app.
     *
     * @var ?string $customerEmail
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerEmail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerEmail = null;

    /**
     * Avatar of the customer in the client's app.
     *
     * @var ?string $customerAvatar
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerAvatar')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerAvatar = null;

    /**
     * Additional metadata to be stored with the lead event
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    public function __construct()
    {
        $this->clickId = '';
        $this->eventName = '';
        $this->customerId = '';
        $this->customerName = null;
        $this->customerEmail = null;
        $this->customerAvatar = null;
        $this->metadata = null;
    }
}