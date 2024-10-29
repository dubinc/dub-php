<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Errors;


use Dub\Utils;
/** UnprocessableEntity - The request was well-formed but was unable to be followed due to semantic errors. */
class UnprocessableEntity
{
    /**
     *
     * @var UnprocessableEntityError $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Errors\UnprocessableEntityError')]
    public UnprocessableEntityError $error;

    /**
     * @param  UnprocessableEntityError  $error
     */
    public function __construct(UnprocessableEntityError $error)
    {
        $this->error = $error;
    }

    public function toException(): UnprocessableEntityThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new UnprocessableEntityThrowable($message, (int) $code, $this);
    }
}