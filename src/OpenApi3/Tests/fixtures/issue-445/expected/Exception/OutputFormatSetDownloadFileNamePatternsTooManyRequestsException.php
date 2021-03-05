<?php

namespace PicturePark\API\Exception;

class OutputFormatSetDownloadFileNamePatternsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}