<?php

namespace PicturePark\API\Exception;

class DisplayValueRerenderTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}