<?php

namespace PicturePark\API\Exception;

class ContentDeleteManyByFilterTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}