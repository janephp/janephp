<?php

namespace CreditSafe\API\Exception;

class ResetPortfolioEventRulesToDefaultValuesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}