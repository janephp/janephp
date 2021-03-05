<?php

namespace PicturePark\API\Exception;

class ShareAggregateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}