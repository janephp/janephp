<?php

namespace CreditSafe\API\Exception;

class PortoflioRiskSummaryUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}