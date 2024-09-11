<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class WebhookEventData
{
    /**
     *
     * @var WebhookEventClick $click
     */
    #[\JMS\Serializer\Annotation\SerializedName('click')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\WebhookEventClick')]
    public WebhookEventClick $click;

    /**
     *
     * @var WebhookEventLink $link
     */
    #[\JMS\Serializer\Annotation\SerializedName('link')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\WebhookEventLink')]
    public WebhookEventLink $link;

    /**
     * @param  WebhookEventClick  $click
     * @param  WebhookEventLink  $link
     */
    public function __construct(WebhookEventClick $click, WebhookEventLink $link)
    {
        $this->click = $click;
        $this->link = $link;
    }
}