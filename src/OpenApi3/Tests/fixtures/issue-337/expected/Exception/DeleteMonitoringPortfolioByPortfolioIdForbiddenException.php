<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfolioByPortfolioIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}