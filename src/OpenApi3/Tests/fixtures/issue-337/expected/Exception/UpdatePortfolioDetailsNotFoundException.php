<?php

namespace CreditSafe\API\Exception;

class UpdatePortfolioDetailsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}