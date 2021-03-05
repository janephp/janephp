<?php

namespace PicturePark\API\Exception;

class OutputFormatSetDownloadFileNamePatternsManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}