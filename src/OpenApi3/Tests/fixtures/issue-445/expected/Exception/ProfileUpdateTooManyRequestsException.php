<?php

namespace PicturePark\API\Exception;

class ProfileUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}