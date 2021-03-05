<?php

namespace CreditSafe\API\Exception;

class PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}