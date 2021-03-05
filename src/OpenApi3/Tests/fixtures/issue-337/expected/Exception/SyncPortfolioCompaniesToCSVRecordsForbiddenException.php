<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}