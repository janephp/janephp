<?php

namespace CreditSafe\API\Exception;

class AllEventRulesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}