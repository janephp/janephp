<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}