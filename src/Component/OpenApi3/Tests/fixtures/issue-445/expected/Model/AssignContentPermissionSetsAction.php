<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignContentPermissionSetsAction extends BusinessRuleAction implements AdditionalPropertiesInterface
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
     * IDs of the permission sets to assign.
     *
     * @var mixed|null
     */
    protected $permissionSetIds;
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @var bool
     */
    protected $replace;
    /**
     * IDs of the permission sets to assign.
     *
     * @return mixed
     */
    public function getPermissionSetIds()
    {
        return $this->permissionSetIds;
    }
    /**
     * IDs of the permission sets to assign.
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
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @return bool
     */
    public function getReplace(): bool
    {
        return $this->replace;
    }
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @param bool $replace
     *
     * @return self
     */
    public function setReplace(bool $replace): self
    {
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['permissionSetIds' => ['permissionSetIds', 'getPermissionSetIds', 'setPermissionSetIds'], 'replace' => ['replace', 'getReplace', 'setReplace']];
    }
}