<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}