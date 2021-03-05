<?php

namespace PicturePark\API\Exception;

class UserCancelDeletionRequestTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}