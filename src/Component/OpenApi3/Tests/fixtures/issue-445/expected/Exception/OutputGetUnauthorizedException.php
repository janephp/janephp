<?php

namespace PicturePark\API\Exception;

class OutputGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}