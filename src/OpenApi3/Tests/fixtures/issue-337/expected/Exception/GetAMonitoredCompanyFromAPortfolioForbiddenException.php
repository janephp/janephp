<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}