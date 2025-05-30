<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Errors;

use Dub\Utils;
/** BadRequest - The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). */
class BadRequest
{
    /**
     *
     * @var Error $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Errors\Error')]
    public Error $error;

    /**
     * @param  Error  $error
     * @phpstan-pure
     */
    public function __construct(Error $error)
    {
        $this->error = $error;
    }

    public function toException(): BadRequestThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new BadRequestThrowable($message, (int) $code, $this);
    }
}