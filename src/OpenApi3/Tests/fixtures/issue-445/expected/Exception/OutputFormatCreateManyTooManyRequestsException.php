<?php

namespace PicturePark\API\Exception;

class OutputFormatCreateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}