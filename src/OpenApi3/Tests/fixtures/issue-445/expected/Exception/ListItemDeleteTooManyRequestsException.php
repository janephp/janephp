<?php

namespace PicturePark\API\Exception;

class ListItemDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}