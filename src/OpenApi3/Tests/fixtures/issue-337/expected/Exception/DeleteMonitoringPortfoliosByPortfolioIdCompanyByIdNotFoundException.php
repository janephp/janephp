<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}