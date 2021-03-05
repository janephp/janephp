<?php

namespace PicturePark\API\Exception;

class BusinessProcessCancelTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}