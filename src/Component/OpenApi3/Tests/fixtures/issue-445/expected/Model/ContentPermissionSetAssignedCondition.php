<?php

namespace PicturePark\API\Model;

class ContentPermissionSetAssignedCondition extends BusinessRuleCondition
{
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
    public function getPermissionSetId() : ?string
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
    public function setPermissionSetId(?string $permissionSetId) : self
    {
        $this->permissionSetId = $permissionSetId;
        return $this;
    }
}