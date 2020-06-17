<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}