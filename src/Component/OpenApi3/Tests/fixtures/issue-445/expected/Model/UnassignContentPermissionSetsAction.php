<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UnassignContentPermissionSetsAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * IDs of the permission sets to unassign.
     *
     * @var mixed|null
     */
    protected $permissionSetIds;
    /**
     * IDs of the permission sets to unassign.
     *
     * @return mixed
     */
    public function getPermissionSetIds()
    {
        return $this->permissionSetIds;
    }
    /**
     * IDs of the permission sets to unassign.
     *
     * @param mixed $permissionSetIds
     *
     * @return self
     */
    public function setPermissionSetIds($permissionSetIds): self
    {
        $this->initialized['permissionSetIds'] = true;
        $this->permissionSetIds = $permissionSetIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['permissionSetIds' => ['permissionSetIds', 'getPermissionSetIds', 'setPermissionSetIds']];
    }
}