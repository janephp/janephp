<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}