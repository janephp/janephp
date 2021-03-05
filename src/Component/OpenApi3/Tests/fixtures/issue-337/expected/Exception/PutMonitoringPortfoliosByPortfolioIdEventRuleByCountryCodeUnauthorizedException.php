<?php

namespace CreditSafe\API\Exception;

class PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}