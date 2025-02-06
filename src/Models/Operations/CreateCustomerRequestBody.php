<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class CreateCustomerRequestBody
{
    /**
     * Unique identifier for the customer in the client's app.
     *
     * @var string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('externalId')]
    public string $externalId;

    /**
     * Email of the customer in the client's app.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * Name of the customer in the client's app. If not provided, a random name will be generated.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Avatar URL of the customer in the client's app.
     *
     * @var ?string $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatar = null;

    /**
     * @param  string  $externalId
     * @param  ?string  $email
     * @param  ?string  $name
     * @param  ?string  $avatar
     * @phpstan-pure
     */
    public function __construct(string $externalId, ?string $email = null, ?string $name = null, ?string $avatar = null)
    {
        $this->externalId = $externalId;
        $this->email = $email;
        $this->name = $name;
        $this->avatar = $avatar;
    }
}