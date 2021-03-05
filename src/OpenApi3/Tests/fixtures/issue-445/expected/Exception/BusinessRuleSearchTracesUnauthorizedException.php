<?php

namespace PicturePark\API\Exception;

class BusinessRuleSearchTracesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}