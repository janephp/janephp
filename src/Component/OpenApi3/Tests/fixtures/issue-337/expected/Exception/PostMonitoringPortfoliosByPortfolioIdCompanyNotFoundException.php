<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdCompanyNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}