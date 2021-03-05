<?php

namespace CreditSafe\API\Exception;

class PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}