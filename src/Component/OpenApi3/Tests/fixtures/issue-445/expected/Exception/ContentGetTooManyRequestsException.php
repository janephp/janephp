<?php

namespace PicturePark\API\Exception;

class ContentGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}