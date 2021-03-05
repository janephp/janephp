<?php

namespace PicturePark\API\Exception;

class ContentRestoreManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}