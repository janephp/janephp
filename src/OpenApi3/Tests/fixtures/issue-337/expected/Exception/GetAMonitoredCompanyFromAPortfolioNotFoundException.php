<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}