<?php

namespace PicturePark\API\Exception;

class ContentGetDownloadLinkTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}