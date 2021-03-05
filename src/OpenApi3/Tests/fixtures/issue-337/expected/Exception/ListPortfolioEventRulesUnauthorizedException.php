<?php

namespace CreditSafe\API\Exception;

class ListPortfolioEventRulesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}