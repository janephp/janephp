<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}