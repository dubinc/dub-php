<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleCreatedEventCustomer
{
    /**
     * The unique ID of the customer. You may use either the customer's `id` on Dub (obtained via `/customers` endpoint) or their `externalId` (unique ID within your system, prefixed with `ext_`, e.g. `ext_123`).
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Unique identifier for the customer in the client's app.
     *
     * @var string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('externalId')]
    public string $externalId;

    /**
     * Name of the customer.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The date the customer was created.
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * Email of the customer.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * Avatar URL of the customer.
     *
     * @var ?string $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatar = null;

    /**
     * Country of the customer.
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     * @param  string  $id
     * @param  string  $externalId
     * @param  string  $name
     * @param  string  $createdAt
     * @param  ?string  $email
     * @param  ?string  $avatar
     * @param  ?string  $country
     * @phpstan-pure
     */
    public function __construct(string $id, string $externalId, string $name, string $createdAt, ?string $email = null, ?string $avatar = null, ?string $country = null)
    {
        $this->id = $id;
        $this->externalId = $externalId;
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->email = $email;
        $this->avatar = $avatar;
        $this->country = $country;
    }
}