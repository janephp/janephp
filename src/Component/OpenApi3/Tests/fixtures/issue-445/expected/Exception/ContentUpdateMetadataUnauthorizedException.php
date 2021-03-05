<?php

namespace PicturePark\API\Exception;

class ContentUpdateMetadataUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}