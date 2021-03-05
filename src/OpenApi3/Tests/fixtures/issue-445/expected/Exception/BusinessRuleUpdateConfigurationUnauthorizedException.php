<?php

namespace PicturePark\API\Exception;

class BusinessRuleUpdateConfigurationUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}