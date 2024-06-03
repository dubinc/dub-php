<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class GetTagsRequest
{
    /**
     * The ID of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workspaceId')]
    public ?string $workspaceId = null;

    /**
     * The slug of the project. This field is deprecated – use `workspaceId` instead.
     *
     * @var ?string $projectSlug
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=projectSlug')]
    public ?string $projectSlug = null;

    public function __construct()
    {
        $this->workspaceId = null;
        $this->projectSlug = null;
    }
}