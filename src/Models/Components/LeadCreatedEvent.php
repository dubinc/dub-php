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
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var LeadCreatedEventEvent $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventEvent')]
    public LeadCreatedEventEvent $event;

    /**
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var LeadCreatedEventData $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LeadCreatedEventData')]
    public LeadCreatedEventData $data;

    /**
     * @param  string  $id
     * @param  LeadCreatedEventEvent  $event
     * @param  string  $createdAt
     * @param  LeadCreatedEventData  $data
     */
    public function __construct(string $id, LeadCreatedEventEvent $event, string $createdAt, LeadCreatedEventData $data)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdAt = $createdAt;
        $this->data = $data;
    }
}