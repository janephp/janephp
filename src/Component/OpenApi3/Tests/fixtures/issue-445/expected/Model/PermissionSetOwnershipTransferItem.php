<?php

namespace PicturePark\API\Model;

class PermissionSetOwnershipTransferItem
{
    /**
     * The ID of the user to whom the permission set ownership should be transferred to.
     *
     * @var string
     */
    protected $transferUserId;
    /**
     * The permission set ID.
     *
     * @var string|null
     */
    protected $permissionSetId;
    /**
     * The ID of the user to whom the permission set ownership should be transferred to.
     *
     * @return string
     */
    public function getTransferUserId() : string
    {
        return $this->transferUserId;
    }
    /**
     * The ID of the user to whom the permission set ownership should be transferred to.
     *
     * @param string $transferUserId
     *
     * @return self
     */
    public function setTransferUserId(string $transferUserId) : self
    {
        $this->transferUserId = $transferUserId;
        return $this;
    }
    /**
     * The permission set ID.
     *
     * @return string|null
     */
    public function getPermissionSetId() : ?string
    {
        return $this->permissionSetId;
    }
    /**
     * The permission set ID.
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