<?php

namespace CreditSafe\API\Exception;

class FreshInvestigationReportUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}