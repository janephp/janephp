<?php

namespace CreditSafe\API\Exception;

class CopyCompaniesFromOneToAnotherPortfolioSUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}