<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class DeleteFolderRequest
{
    /**
     * The ID of the folder to delete.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  string  $id
     * @phpstan-pure
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}