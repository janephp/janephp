<?php

namespace CreditSafe\API\Exception;

class SyncPortfolioCompaniesToCSVRecordsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}