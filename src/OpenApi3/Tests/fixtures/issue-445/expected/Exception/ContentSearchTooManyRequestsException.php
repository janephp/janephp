<?php

namespace PicturePark\API\Exception;

class ContentSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}