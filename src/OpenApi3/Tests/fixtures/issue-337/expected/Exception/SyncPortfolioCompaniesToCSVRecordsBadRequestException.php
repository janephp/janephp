<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}