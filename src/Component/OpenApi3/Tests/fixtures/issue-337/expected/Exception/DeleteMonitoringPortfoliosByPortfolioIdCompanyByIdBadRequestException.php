<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}