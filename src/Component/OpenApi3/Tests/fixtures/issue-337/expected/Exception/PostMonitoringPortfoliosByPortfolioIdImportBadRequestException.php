<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdImportBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}