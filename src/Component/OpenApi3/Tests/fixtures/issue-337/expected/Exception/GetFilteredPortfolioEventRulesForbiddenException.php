<?php

namespace CreditSafe\API\Exception;

class GetFilteredPortfolioEventRulesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}