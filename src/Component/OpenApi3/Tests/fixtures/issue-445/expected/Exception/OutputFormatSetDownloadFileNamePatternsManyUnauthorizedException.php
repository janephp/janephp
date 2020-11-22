<?php

namespace PicturePark\API\Exception;

class OutputFormatSetDownloadFileNamePatternsManyUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}