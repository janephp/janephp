<?php

namespace PicturePark\API\Exception;

class OutputFormatCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}