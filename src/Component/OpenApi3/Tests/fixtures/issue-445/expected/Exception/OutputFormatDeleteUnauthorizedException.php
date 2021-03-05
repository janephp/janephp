<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}