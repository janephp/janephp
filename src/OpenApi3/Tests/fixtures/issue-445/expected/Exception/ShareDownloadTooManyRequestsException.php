<?php

namespace PicturePark\API\Exception;

class ShareDownloadTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}