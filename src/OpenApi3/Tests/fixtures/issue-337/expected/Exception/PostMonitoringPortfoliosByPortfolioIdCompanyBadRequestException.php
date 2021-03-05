<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdCompanyBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}