<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdImportNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}