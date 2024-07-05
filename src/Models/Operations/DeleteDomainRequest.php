<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class DeleteDomainRequest
{
    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=slug')]
    public string $slug;

    /**
     * The ID of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workspaceId')]
    public ?string $workspaceId = null;

    public function __construct()
    {
        $this->slug = '';
        $this->workspaceId = null;
    }
}