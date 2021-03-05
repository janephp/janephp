<?php

namespace PicturePark\API\Exception;

class ListItemGetManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}