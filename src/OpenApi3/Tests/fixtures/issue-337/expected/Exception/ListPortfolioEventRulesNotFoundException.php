<?php

namespace CreditSafe\API\Exception;

class ListPortfolioEventRulesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}