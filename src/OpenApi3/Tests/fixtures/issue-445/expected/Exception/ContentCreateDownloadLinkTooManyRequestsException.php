<?php

namespace PicturePark\API\Exception;

class ContentCreateDownloadLinkTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}