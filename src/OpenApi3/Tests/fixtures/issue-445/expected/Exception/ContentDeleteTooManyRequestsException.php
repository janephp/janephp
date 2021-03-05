<?php

namespace PicturePark\API\Exception;

class ContentDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}