<?php

namespace PicturePark\API\Exception;

class ContentDownloadUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}