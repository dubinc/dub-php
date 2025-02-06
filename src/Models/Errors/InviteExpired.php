<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Errors;

use Dub\Utils;
/** InviteExpired - This response is sent when the requested content has been permanently deleted from server, with no forwarding address. */
class InviteExpired
{
    /**
     *
     * @var InviteExpiredError $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Errors\InviteExpiredError')]
    public InviteExpiredError $error;

    /**
     * @param  InviteExpiredError  $error
     * @phpstan-pure
     */
    public function __construct(InviteExpiredError $error)
    {
        $this->error = $error;
    }

    public function toException(): InviteExpiredThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new InviteExpiredThrowable($message, (int) $code, $this);
    }
}