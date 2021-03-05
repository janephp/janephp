<?php

namespace PicturePark\API\Exception;

class ShareDownloadSingleContentTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}