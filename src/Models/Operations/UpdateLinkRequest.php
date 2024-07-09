<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class UpdateLinkRequest
{
    /**
     * The id of the link to update. You may use either `linkId` (obtained via `/links/info` endpoint) or `externalId` prefixed with `ext_`.
     *
     * @var string $linkId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=linkId')]
    public string $linkId;

    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?UpdateLinkRequestBody $requestBody = null;

    public function __construct()
    {
        $this->linkId = '';
        $this->requestBody = null;
    }
}