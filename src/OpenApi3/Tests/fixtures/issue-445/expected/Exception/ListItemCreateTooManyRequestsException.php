<?php

namespace PicturePark\API\Exception;

class ListItemCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}