<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleCreatedEventCustomer
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public ?string $name;

    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public ?string $email;

    /**
     *
     * @var ?string $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    public ?string $avatar;

    /**
     * @param  string  $id
     * @param  ?string  $name
     * @param  ?string  $email
     * @param  ?string  $avatar
     */
    public function __construct(string $id, ?string $name = null, ?string $email = null, ?string $avatar = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->avatar = $avatar;
    }
}