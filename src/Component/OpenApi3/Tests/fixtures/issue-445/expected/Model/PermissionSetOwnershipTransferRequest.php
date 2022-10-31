<?php

namespace PicturePark\API\Model;

class PermissionSetOwnershipTransferRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the user to whom the permission set ownership should be transferred to.
     *
     * @var string
     */
    protected $transferUserId;
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
        $this->initialized['transferUserId'] = true;
        $this->transferUserId = $transferUserId;
        return $this;
    }
}