<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class One
{
    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var Event1|Event2|Event3 $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\Event1|\Dub\Models\Components\Event2|\Dub\Models\Components\Event3')]
    public Event1|Event2|Event3 $event;

    /**
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     *
     * @var Data $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\Data')]
    public Data $data;

    /**
     * @param  string  $id
     * @param  Event1|Event2|Event3  $event
     * @param  string  $createdAt
     * @param  Data  $data
     */
    public function __construct(string $id, Event1|Event2|Event3 $event, string $createdAt, Data $data)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdAt = $createdAt;
        $this->data = $data;
    }
}