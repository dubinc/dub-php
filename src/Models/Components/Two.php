<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Two
{
    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var WebhookEvent2Event $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\WebhookEvent2Event')]
    public WebhookEvent2Event $event;

    /**
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var WebhookEventData $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\WebhookEventData')]
    public WebhookEventData $data;

    /**
     * @param  string  $id
     * @param  WebhookEvent2Event  $event
     * @param  string  $createdAt
     * @param  WebhookEventData  $data
     */
    public function __construct(string $id, WebhookEvent2Event $event, string $createdAt, WebhookEventData $data)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdAt = $createdAt;
        $this->data = $data;
    }
}