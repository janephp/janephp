<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}