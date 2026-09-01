<?php

namespace PicturePark\API\Model;

class UserDeleteRequest
{
    /**
     * User ID of user who will take over the ownership of the content currently owned by the deleted user.
     *
     * @var string|null
     */
    public ?string $ownerTokenTransferUserId;
}