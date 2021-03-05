<?php

namespace PicturePark\API\Exception;

class OutputFormatSetDownloadFileNamePatternsManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}