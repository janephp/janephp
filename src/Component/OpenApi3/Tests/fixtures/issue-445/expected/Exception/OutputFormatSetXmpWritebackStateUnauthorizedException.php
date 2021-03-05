<?php

namespace PicturePark\API\Exception;

class OutputFormatSetXmpWritebackStateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}