<?php

namespace PicturePark\API\Exception;

class ListItemGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}