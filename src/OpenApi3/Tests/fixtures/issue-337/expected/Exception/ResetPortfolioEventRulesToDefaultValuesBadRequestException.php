<?php

namespace CreditSafe\API\Exception;

class ResetPortfolioEventRulesToDefaultValuesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}