<?php

namespace CreditSafe\API\Exception;

class PutMonitoringPortfoliosByPortfolioIdEventRuleByCountryCodeBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}