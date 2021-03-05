<?php

namespace CreditSafe\API\Exception;

class GetFilteredPortfolioEventRulesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}