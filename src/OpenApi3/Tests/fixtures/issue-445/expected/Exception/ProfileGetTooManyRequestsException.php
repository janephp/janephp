<?php

namespace PicturePark\API\Exception;

class ProfileGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}