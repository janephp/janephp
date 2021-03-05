<?php

namespace PicturePark\API\Exception;

class ContentDownloadThumbnailUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}