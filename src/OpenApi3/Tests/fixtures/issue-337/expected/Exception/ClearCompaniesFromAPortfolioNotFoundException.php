<?php

namespace CreditSafe\API\Exception;

class ClearCompaniesFromAPortfolioNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}