<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** TrackCustomerResponseBody - A customer was tracked. */
class TrackCustomerResponseBody
{
    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerId')]
    public string $customerId;

    /**
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerName')]
    public ?string $customerName;

    /**
     *
     * @var ?string $customerEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerEmail')]
    public ?string $customerEmail;

    /**
     *
     * @var ?string $customerAvatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerAvatar')]
    public ?string $customerAvatar;

    /**
     * @param  string  $customerId
     * @param  ?string  $customerName
     * @param  ?string  $customerEmail
     * @param  ?string  $customerAvatar
     */
    public function __construct(string $customerId, ?string $customerName = null, ?string $customerEmail = null, ?string $customerAvatar = null)
    {
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerAvatar = $customerAvatar;
    }
}