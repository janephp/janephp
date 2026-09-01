<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignContentPermissionSetsAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IDs of the permission sets to assign.
     *
     * @var mixed|null
     */
    public $permissionSetIds;
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @var bool
     */
    public bool $replace;
    public function definedProperties(): array
    {
        return ['permissionSetIds' => 'permissionSetIds', 'replace' => 'replace'];
    }
}