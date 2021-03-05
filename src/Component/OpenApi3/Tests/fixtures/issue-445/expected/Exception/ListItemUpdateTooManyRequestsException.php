<?php

namespace PicturePark\API\Exception;

class ListItemUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}