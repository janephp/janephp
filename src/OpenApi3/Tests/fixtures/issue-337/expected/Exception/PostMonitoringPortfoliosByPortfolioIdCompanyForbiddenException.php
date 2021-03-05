<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdCompanyForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}