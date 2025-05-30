<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class UpdateWorkspaceRequest
{
    /**
     * The ID or slug of the workspace to update.
     *
     * @var string $idOrSlug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=idOrSlug')]
    public string $idOrSlug;

    /**
     *
     * @var ?UpdateWorkspaceRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?UpdateWorkspaceRequestBody $requestBody = null;

    /**
     * @param  string  $idOrSlug
     * @param  ?UpdateWorkspaceRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $idOrSlug, ?UpdateWorkspaceRequestBody $requestBody = null)
    {
        $this->idOrSlug = $idOrSlug;
        $this->requestBody = $requestBody;
    }
}