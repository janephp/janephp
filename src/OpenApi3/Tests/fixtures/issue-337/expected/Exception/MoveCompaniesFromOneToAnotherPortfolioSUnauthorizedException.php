<?php

namespace CreditSafe\API\Exception;

class MoveCompaniesFromOneToAnotherPortfolioSUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}