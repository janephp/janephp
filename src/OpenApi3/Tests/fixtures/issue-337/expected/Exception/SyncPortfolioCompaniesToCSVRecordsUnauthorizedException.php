<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}