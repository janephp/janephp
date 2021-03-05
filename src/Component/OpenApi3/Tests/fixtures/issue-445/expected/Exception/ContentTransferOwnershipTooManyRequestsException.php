<?php

namespace PicturePark\API\Exception;

class ContentTransferOwnershipTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}