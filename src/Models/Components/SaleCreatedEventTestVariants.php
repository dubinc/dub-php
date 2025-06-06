<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SaleCreatedEventTestVariants
{
    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var float $percentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('percentage')]
    public float $percentage;

    /**
     * @param  string  $url
     * @param  float  $percentage
     * @phpstan-pure
     */
    public function __construct(string $url, float $percentage)
    {
        $this->url = $url;
        $this->percentage = $percentage;
    }
}