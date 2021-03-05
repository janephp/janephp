<?php

namespace PicturePark\API\Exception;

class OutputFormatGetManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}