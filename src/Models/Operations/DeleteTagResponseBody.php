<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** DeleteTagResponseBody - The deleted tag ID. */
class DeleteTagResponseBody
{
    /**
     * The ID of the deleted tag.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * @param  string  $id
     * @phpstan-pure
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}