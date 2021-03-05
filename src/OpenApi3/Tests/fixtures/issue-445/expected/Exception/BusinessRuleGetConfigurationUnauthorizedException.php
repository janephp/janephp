<?php

namespace PicturePark\API\Exception;

class BusinessRuleGetConfigurationUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}