<?php

namespace CreditSafe\API\Exception;

class GetFilteredPortfolioEventRulesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}