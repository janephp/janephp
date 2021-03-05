<?php

namespace PicturePark\API\Exception;

class ShareSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}