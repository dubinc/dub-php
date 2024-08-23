<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SalesDevices
{
    /**
     * The name of the device
     *
     * @var string $device
     */
    #[\JMS\Serializer\Annotation\SerializedName('device')]
    public string $device;

    /**
     * The number of sales from this device
     *
     * @var float $sales
     */
    #[\JMS\Serializer\Annotation\SerializedName('sales')]
    public float $sales;

    /**
     * The total amount of sales from this device
     *
     * @var float $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    public float $amount;

    /**
     * @param  ?string  $device
     * @param  ?float  $sales
     * @param  ?float  $amount
     */
    public function __construct(?string $device = null, ?float $sales = null, ?float $amount = null)
    {
        $this->device = $device;
        $this->sales = $sales;
        $this->amount = $amount;
    }
}