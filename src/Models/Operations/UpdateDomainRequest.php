<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class UpdateDomainRequest
{
    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=slug')]
    public string $slug;

    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?UpdateDomainRequestBody $requestBody = null;

    public function __construct()
    {
        $this->slug = '';
        $this->requestBody = null;
    }
}