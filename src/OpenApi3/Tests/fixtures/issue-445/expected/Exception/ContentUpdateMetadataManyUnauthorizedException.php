<?php

namespace PicturePark\API\Exception;

class ContentUpdateMetadataManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}