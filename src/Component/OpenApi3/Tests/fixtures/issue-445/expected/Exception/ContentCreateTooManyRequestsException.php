<?php

namespace PicturePark\API\Exception;

class ContentCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}