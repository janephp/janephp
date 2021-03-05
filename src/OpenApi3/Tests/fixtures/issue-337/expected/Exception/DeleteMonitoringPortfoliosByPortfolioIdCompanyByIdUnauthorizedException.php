<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}