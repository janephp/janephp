<?php

namespace PicturePark\API\Exception;

class UserInviteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}