<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Errors;

use Dub\Utils;
/** Unauthorized - Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That is, the client must authenticate itself to get the requested response. */
class Unauthorized
{
    /**
     *
     * @var UnauthorizedError $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Errors\UnauthorizedError')]
    public UnauthorizedError $error;

    /**
     * @param  UnauthorizedError  $error
     */
    public function __construct(UnauthorizedError $error)
    {
        $this->error = $error;
    }

    public function toException(): UnauthorizedThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new UnauthorizedThrowable($message, (int) $code, $this);
    }
}