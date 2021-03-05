<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}