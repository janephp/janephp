<?php

namespace PicturePark\API\Exception;

class OutputFormatUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}