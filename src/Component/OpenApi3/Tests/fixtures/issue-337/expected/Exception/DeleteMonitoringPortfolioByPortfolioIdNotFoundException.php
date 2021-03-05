<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfolioByPortfolioIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}