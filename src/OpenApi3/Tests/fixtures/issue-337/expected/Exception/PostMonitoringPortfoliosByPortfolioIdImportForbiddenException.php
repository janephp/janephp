<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdImportForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}