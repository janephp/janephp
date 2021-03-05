<?php

namespace PicturePark\API\Exception;

class ShareUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}