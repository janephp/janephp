<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdCompanyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}