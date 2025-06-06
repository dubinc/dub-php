<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


/** PartnerEnrolledEvent - Triggered when a partner is enrolled. */
class PartnerEnrolledEvent
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var PartnerEnrolledEventEvent $event
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\PartnerEnrolledEventEvent')]
    public PartnerEnrolledEventEvent $event;

    /**
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var PartnerEnrolledEventData $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\PartnerEnrolledEventData')]
    public PartnerEnrolledEventData $data;

    /**
     * @param  string  $id
     * @param  PartnerEnrolledEventEvent  $event
     * @param  string  $createdAt
     * @param  PartnerEnrolledEventData  $data
     * @phpstan-pure
     */
    public function __construct(string $id, PartnerEnrolledEventEvent $event, string $createdAt, PartnerEnrolledEventData $data)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdAt = $createdAt;
        $this->data = $data;
    }
}