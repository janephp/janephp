<?php

namespace PicturePark\API\Exception;

class ShareGetShareJsonTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}