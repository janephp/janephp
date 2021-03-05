<?php

namespace CreditSafe\API\Exception;

class ResetPortfolioEventRulesToDefaultValuesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}