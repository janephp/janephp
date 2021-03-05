<?php

namespace PicturePark\API\Exception;

class ContentAggregateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}