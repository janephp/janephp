<?php

namespace PicturePark\API\Exception;

class OutputFormatUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}