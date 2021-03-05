<?php

namespace PicturePark\API\Exception;

class ShareDeleteManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}