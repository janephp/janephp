<?php

namespace PicturePark\API\Exception;

class OutputFormatUpdateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}