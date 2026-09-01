<?php

namespace PicturePark\API\Model;

class PermissionUserRoleRightsOfContentRight
{
    /**
     * The user role ID.
     *
     * @var string|null
     */
    public ?string $userRoleId;
    /**
     * Language specific user role names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * List of rights: they can be content, metadata or permission set rights, depending on the type defined on the class
     * (ContentRight, MetadataRight, PermissionSetRight).
     *
     * @var list<string>|null
     */
    public ?array $rights;
}