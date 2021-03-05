<?php

namespace PicturePark\API\Exception;

class ContentTransferOwnershipManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}