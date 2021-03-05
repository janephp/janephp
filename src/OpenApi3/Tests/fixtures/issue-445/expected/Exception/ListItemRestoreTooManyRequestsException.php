<?php

namespace PicturePark\API\Exception;

class ListItemRestoreTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}