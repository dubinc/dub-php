<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class UpdateTagRequest
{
    /**
     * The ID of the tag to update.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var ?UpdateTagRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?UpdateTagRequestBody $requestBody = null;

    /**
     * @param  string  $id
     * @param  ?UpdateTagRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $id, ?UpdateTagRequestBody $requestBody = null)
    {
        $this->id = $id;
        $this->requestBody = $requestBody;
    }
}