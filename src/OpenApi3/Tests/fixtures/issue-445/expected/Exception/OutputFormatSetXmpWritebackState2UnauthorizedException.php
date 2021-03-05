<?php

namespace PicturePark\API\Exception;

class OutputFormatSetXmpWritebackState2UnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}