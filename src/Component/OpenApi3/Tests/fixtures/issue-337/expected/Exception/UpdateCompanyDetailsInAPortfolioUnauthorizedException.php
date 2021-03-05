<?php

namespace CreditSafe\API\Exception;

class UpdateCompanyDetailsInAPortfolioUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}