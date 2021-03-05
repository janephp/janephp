<?php

namespace CreditSafe\API\Exception;

class GetFilteredPortfolioEventRulesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}