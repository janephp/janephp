<?php

namespace CreditSafe\API\Exception;

class ClearCompaniesFromAPortfolioUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}