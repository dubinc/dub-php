<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Four
{
    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var WebhookEvent4Event $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\WebhookEvent4Event')]
    public WebhookEvent4Event $event;

    /**
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var WebhookEvent4Data $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\WebhookEvent4Data')]
    public WebhookEvent4Data $data;

    /**
     * @param  string  $id
     * @param  WebhookEvent4Event  $event
     * @param  string  $createdAt
     * @param  WebhookEvent4Data  $data
     */
    public function __construct(string $id, WebhookEvent4Event $event, string $createdAt, WebhookEvent4Data $data)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdAt = $createdAt;
        $this->data = $data;
    }
}