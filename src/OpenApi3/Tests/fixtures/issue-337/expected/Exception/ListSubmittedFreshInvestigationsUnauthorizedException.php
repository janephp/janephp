<?php

namespace CreditSafe\API\Exception;

class ListSubmittedFreshInvestigationsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}