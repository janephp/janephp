<?php

namespace CreditSafe\API\Exception;

class CreateMonitoringPortfolioUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}