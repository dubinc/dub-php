<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** DeleteCustomerResponseBody - The customer was deleted. */
class DeleteCustomerResponseBody
{
    /**
     * The unique identifier of the customer in Dub.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * @param  string  $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}