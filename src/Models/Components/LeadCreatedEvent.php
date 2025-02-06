<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


/** LeadCreatedEvent - Triggered when a lead is created. */
class LeadCreatedEvent
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var LeadCreatedEventEvent $event
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventEvent')]
    public LeadCreatedEventEvent $event;

    /**
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var LeadCreatedEventData $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventData')]
    public LeadCreatedEventData $data;

    /**
     * @param  string  $id
     * @param  LeadCreatedEventEvent  $event
     * @param  string  $createdAt
     * @param  LeadCreatedEventData  $data
     * @phpstan-pure
     */
    public function __construct(string $id, LeadCreatedEventEvent $event, string $createdAt, LeadCreatedEventData $data)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdAt = $createdAt;
        $this->data = $data;
    }
}