<?php

namespace CreditSafe\API\Exception;

class CreateMonitoringPortfolioBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}