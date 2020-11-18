<?php

namespace PicturePark\API\Model;

class UserDeleteRequest
{
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
        $this->ownerTokenTransferUserId = $ownerTokenTransferUserId;
        return $this;
    }
}