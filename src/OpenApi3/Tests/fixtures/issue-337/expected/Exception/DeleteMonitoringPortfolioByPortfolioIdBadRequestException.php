<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfolioByPortfolioIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}