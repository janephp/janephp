<?php

namespace PicturePark\API\Exception;

class ContentGetDownloadLinkUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}