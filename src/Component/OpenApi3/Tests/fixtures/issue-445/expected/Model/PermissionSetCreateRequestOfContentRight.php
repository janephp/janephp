<?php

namespace PicturePark\API\Model;

class PermissionSetCreateRequestOfContentRight
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
     * @var list<UserRoleRightsOfContentRight>|null
     */
    public ?array $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var list<UserRoleRightsOfPermissionSetRight>|null
     */
    public ?array $userRolesPermissionSetRights;
    /**
     * When true this permission set will derogate all other configured permission sets on Content Items or List Items.
     *
     * @var bool
     */
    public bool $exclusive;
    /**
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @var string|null
     */
    public ?string $requestId;
}