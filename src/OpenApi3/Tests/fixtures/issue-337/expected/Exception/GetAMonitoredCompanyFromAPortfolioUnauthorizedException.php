<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}