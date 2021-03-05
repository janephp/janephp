<?php

namespace CreditSafe\API\Exception;

class RunDecisionTreeUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}