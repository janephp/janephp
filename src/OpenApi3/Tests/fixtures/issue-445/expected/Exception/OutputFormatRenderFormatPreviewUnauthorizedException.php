<?php

namespace PicturePark\API\Exception;

class OutputFormatRenderFormatPreviewUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}