<?php

namespace PicturePark\API\Model;

class PermissionSetDetailOfContentRight
{
    /**
     * The permission set ID.
     *
     * @var string
     */
    public string $id;
    /**
     * Language specific permission set names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var list<PermissionUserRoleRightsOfContentRight>|null
     */
    public ?array $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var list<PermissionUserRoleRightsOfPermissionSetRight>|null
     */
    public ?array $userRolesPermissionSetRights;
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @var bool
     */
    public bool $exclusive;
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @var string
     */
    public string $ownerTokenId;
    /**
     * Audit information.
     *
     * @var UserAuditDetail|null
     */
    public ?UserAuditDetail $audit;
}