<?php

namespace PicturePark\API\Exception;

class ShareRevokeTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}