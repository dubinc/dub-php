<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** DeleteLinkResponseBody - The deleted link */
class DeleteLinkResponseBody
{
    /**
     * The ID of the link.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    public function __construct()
    {
        $this->id = '';
    }
}