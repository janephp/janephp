<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentPermissionSetUpdateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['names' => 'names', 'userRolesRights' => 'userRolesRights', 'userRolesPermissionSetRights' => 'userRolesPermissionSetRights'];
    }
}