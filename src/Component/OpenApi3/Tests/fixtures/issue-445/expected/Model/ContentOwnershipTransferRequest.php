<?php

namespace PicturePark\API\Model;

class ContentOwnershipTransferRequest
{
    /**
     * The ID of the user to whom the content ownership has to be transferred to.
     *
     * @var string
     */
    public string $transferUserId;
}