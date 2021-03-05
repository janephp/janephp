<?php

namespace PicturePark\API\Exception;

class UserReinviteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}