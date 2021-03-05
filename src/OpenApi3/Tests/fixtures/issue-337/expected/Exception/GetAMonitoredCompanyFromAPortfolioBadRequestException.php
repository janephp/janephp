<?php

namespace CreditSafe\API\Exception;

class GetAMonitoredCompanyFromAPortfolioBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}