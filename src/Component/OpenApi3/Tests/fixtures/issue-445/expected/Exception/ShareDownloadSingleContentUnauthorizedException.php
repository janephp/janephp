<?php

namespace PicturePark\API\Exception;

class ShareDownloadSingleContentUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}