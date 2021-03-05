<?php

namespace PicturePark\API\Exception;

class ChannelDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}