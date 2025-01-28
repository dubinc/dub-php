<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class CreatePartnerDiscount
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public float $amount;

    /**
     *
     * @var CreatePartnerType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\CreatePartnerType')]
    public CreatePartnerType $type;

    /**
     *
     * @var ?string $couponId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('couponId')]
    public ?string $couponId;

    /**
     *
     * @var ?string $couponTestId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('couponTestId')]
    public ?string $couponTestId;

    /**
     *
     * @var ?float $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    public ?float $duration;

    /**
     *
     * @var ?CreatePartnerInterval $interval
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Operations\CreatePartnerInterval|null')]
    public ?CreatePartnerInterval $interval;

    /**
     * @param  string  $id
     * @param  float  $amount
     * @param  CreatePartnerType  $type
     * @param  ?string  $couponId
     * @param  ?string  $couponTestId
     * @param  ?float  $duration
     * @param  ?CreatePartnerInterval  $interval
     */
    public function __construct(string $id, float $amount, CreatePartnerType $type, ?string $couponId = null, ?string $couponTestId = null, ?float $duration = null, ?CreatePartnerInterval $interval = null)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->type = $type;
        $this->couponId = $couponId;
        $this->couponTestId = $couponTestId;
        $this->duration = $duration;
        $this->interval = $interval;
    }
}