<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}