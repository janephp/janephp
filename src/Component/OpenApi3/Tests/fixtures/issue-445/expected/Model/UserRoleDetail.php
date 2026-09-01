<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserRoleDetail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Language specific user role names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * All user rights for this user role.
     *
     * @var list<string>
     */
    public array $userRights;
    /**
     * User role ID.
     *
     * @var string
     */
    public string $id;
    /**
     * Audit information.
     *
     * @var UserAuditDetail|null
     */
    public ?UserAuditDetail $audit;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'userRights' => 'userRights', 'id' => 'id', 'audit' => 'audit'];
    }
}