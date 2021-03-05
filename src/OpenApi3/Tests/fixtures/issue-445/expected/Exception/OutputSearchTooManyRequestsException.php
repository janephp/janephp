<?php

namespace PicturePark\API\Exception;

class OutputSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}