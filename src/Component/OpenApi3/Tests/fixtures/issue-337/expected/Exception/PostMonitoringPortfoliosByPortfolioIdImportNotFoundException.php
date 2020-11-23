<?php

namespace CreditSafe\API\Exception;

class PostMonitoringPortfoliosByPortfolioIdImportNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}