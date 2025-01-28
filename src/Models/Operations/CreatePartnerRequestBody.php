<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class CreatePartnerRequestBody
{
    /**
     * The ID of the program to create a partner for.
     *
     * @var string $programId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('programId')]
    public string $programId;

    /**
     * Full legal name of the partner.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Email for the partner in your system. Partners will be able to claim their profile by signing up to Dub Partners with this email.
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * A unique username for the partner in your system. This will be used to create a short link for the partner using your program's default domain.
     *
     * @var string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    public string $username;

    /**
     * Avatar image for the partner – if not provided, a default avatar will be used.
     *
     * @var ?string $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $image = null;

    /**
     * Country where the partner is based.
     *
     * @var ?Country $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\Country|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Country $country = null;

    /**
     * A brief description of the partner and their background.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * @param  string  $programId
     * @param  string  $name
     * @param  string  $email
     * @param  string  $username
     * @param  ?string  $image
     * @param  ?Country  $country
     * @param  ?string  $description
     */
    public function __construct(string $programId, string $name, string $email, string $username, ?string $image = null, ?Country $country = null, ?string $description = null)
    {
        $this->programId = $programId;
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->image = $image;
        $this->country = $country;
        $this->description = $description;
    }
}