<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}