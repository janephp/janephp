<?php

namespace CreditSafe\API\Exception;

class CreateMonitoringPortfolioNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}