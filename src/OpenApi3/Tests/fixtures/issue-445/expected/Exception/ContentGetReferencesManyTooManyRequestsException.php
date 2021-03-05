<?php

namespace PicturePark\API\Exception;

class ContentGetReferencesManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}