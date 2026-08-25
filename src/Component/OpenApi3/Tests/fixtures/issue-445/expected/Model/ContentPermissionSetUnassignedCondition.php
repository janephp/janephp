<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentPermissionSetUnassignedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
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
     * Permission set id to match on.
     *
     * @var string|null
     */
    protected $permissionSetId;
    /**
     * Permission set id to match on.
     *
     * @return string|null
     */
    public function getPermissionSetId(): ?string
    {
        return $this->permissionSetId;
    }
    /**
     * Permission set id to match on.
     *
     * @param string|null $permissionSetId
     *
     * @return self
     */
    public function setPermissionSetId(?string $permissionSetId): self
    {
        $this->initialized['permissionSetId'] = true;
        $this->permissionSetId = $permissionSetId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['permissionSetId' => ['permissionSetId', 'getPermissionSetId', 'setPermissionSetId']];
    }
}