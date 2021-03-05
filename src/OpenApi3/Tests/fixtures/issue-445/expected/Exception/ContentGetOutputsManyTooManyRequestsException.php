<?php

namespace PicturePark\API\Exception;

class ContentGetOutputsManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}