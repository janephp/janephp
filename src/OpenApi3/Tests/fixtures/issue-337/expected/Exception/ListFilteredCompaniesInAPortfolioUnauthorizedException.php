<?php

namespace CreditSafe\API\Exception;

class ListFilteredCompaniesInAPortfolioUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}