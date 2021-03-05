<?php

namespace PicturePark\API\Exception;

class ChannelGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}