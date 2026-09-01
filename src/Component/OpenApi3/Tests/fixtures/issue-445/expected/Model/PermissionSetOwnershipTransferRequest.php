<?php

namespace PicturePark\API\Model;

class PermissionSetOwnershipTransferRequest
{
    /**
     * The ID of the user to whom the permission set ownership should be transferred to.
     *
     * @var string
     */
    public string $transferUserId;
}