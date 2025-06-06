<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** RegisterDomainResponseBody - The domain was registered. */
class RegisterDomainResponseBody
{
    /**
     * The domain name.
     *
     * @var string $domain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domain')]
    public string $domain;

    /**
     * The status of the domain registration.
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * The expiration timestamp of the domain (Unix timestamp in milliseconds).
     *
     * @var ?float $expiration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiration')]
    public ?float $expiration;

    /**
     * @param  string  $domain
     * @param  string  $status
     * @param  ?float  $expiration
     * @phpstan-pure
     */
    public function __construct(string $domain, string $status, ?float $expiration = null)
    {
        $this->domain = $domain;
        $this->status = $status;
        $this->expiration = $expiration;
    }
}