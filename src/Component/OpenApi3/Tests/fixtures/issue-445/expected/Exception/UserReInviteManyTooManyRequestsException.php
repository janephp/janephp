<?php

namespace PicturePark\API\Exception;

class UserReInviteManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}