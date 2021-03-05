<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}