<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfolioByPortfolioIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}