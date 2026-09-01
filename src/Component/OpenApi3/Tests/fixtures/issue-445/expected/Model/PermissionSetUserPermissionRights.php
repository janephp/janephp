<?php

namespace PicturePark\API\Model;

class PermissionSetUserPermissionRights
{
    /**
     * Permission set ID.
     *
     * @var string|null
     */
    public ?string $permissionSetId;
    /**
     * List of rights on the permission set specified by PermissionSetId
     *
     * @var list<string>|null
     */
    public ?array $permissionSetRights;
}