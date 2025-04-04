<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class UpdateCustomerPartner
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public ?string $email;

    /**
     *
     * @var ?string $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image')]
    public ?string $image;

    /**
     * @param  string  $id
     * @param  string  $name
     * @param  ?string  $email
     * @param  ?string  $image
     * @phpstan-pure
     */
    public function __construct(string $id, string $name, ?string $email = null, ?string $image = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->image = $image;
    }
}