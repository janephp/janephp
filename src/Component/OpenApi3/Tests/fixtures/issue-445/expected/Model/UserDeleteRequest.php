<?php

namespace PicturePark\API\Model;

class UserDeleteRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * User ID of user who will take over the ownership of the content currently owned by the deleted user.
     *
     * @var string|null
     */
    protected $ownerTokenTransferUserId;
    /**
     * User ID of user who will take over the ownership of the content currently owned by the deleted user.
     *
     * @return string|null
     */
    public function getOwnerTokenTransferUserId() : ?string
    {
        return $this->ownerTokenTransferUserId;
    }
    /**
     * User ID of user who will take over the ownership of the content currently owned by the deleted user.
     *
     * @param string|null $ownerTokenTransferUserId
     *
     * @return self
     */
    public function setOwnerTokenTransferUserId(?string $ownerTokenTransferUserId) : self
    {
        $this->initialized['ownerTokenTransferUserId'] = true;
        $this->ownerTokenTransferUserId = $ownerTokenTransferUserId;
        return $this;
    }
}