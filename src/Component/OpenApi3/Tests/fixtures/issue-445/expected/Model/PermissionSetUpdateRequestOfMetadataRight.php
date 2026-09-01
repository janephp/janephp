<?php

namespace PicturePark\API\Model;

class PermissionSetUpdateRequestOfMetadataRight
{
    /**
     * Language specific permission set names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var list<UserRoleRightsOfMetadataRight>|null
     */
    public ?array $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var list<UserRoleRightsOfPermissionSetRight>|null
     */
    public ?array $userRolesPermissionSetRights;
}