<?php

namespace CreditSafe\API\Exception;

class GenerateAuthenticationTokenUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}