<?php

namespace PicturePark\API\Exception;

class ContentCreateDownloadLinkUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}