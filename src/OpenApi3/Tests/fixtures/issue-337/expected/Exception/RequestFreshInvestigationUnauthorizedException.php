<?php

namespace CreditSafe\API\Exception;

class RequestFreshInvestigationUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}