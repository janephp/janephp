<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UnassignContentPermissionSetsAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IDs of the permission sets to unassign.
     *
     * @var mixed|null
     */
    public $permissionSetIds;
    public function definedProperties(): array
    {
        return ['permissionSetIds' => 'permissionSetIds'];
    }
}