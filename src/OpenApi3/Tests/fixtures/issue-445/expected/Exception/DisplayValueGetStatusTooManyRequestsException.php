<?php

namespace PicturePark\API\Exception;

class DisplayValueGetStatusTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}