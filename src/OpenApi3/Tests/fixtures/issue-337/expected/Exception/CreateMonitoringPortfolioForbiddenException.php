<?php

namespace CreditSafe\API\Exception;

class CreateMonitoringPortfolioForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}