<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class LinkClickedEventData
{
    /**
     *
     * @var LinkClickedEventClick $click
     */
    #[\JMS\Serializer\Annotation\SerializedName('click')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LinkClickedEventClick')]
    public LinkClickedEventClick $click;

    /**
     *
     * @var LinkClickedEventLink $link
     */
    #[\JMS\Serializer\Annotation\SerializedName('link')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LinkClickedEventLink')]
    public LinkClickedEventLink $link;

    /**
     * @param  LinkClickedEventClick  $click
     * @param  LinkClickedEventLink  $link
     */
    public function __construct(LinkClickedEventClick $click, LinkClickedEventLink $link)
    {
        $this->click = $click;
        $this->link = $link;
    }
}