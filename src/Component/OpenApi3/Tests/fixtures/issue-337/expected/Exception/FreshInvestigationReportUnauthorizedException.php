<?php

namespace CreditSafe\API\Exception;

class FreshInvestigationReportUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}