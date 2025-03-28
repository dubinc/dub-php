<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Users
{
    /**
     * The role of the authenticated user in the workspace.
     *
     * @var Role $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\Role')]
    public Role $role;

    /**
     * The ID of the default folder for the user in the workspace.
     *
     * @var ?string $defaultFolderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('defaultFolderId')]
    public ?string $defaultFolderId;

    /**
     * @param  Role  $role
     * @param  ?string  $defaultFolderId
     * @phpstan-pure
     */
    public function __construct(Role $role, ?string $defaultFolderId = null)
    {
        $this->role = $role;
        $this->defaultFolderId = $defaultFolderId;
    }
}