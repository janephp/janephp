<?php

namespace PicturePark\API\Exception;

class ListItemUpdateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}