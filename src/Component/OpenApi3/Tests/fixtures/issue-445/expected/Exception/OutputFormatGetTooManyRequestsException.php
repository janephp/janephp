<?php

namespace PicturePark\API\Exception;

class OutputFormatGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}