<?php

namespace CreditSafe\API\Exception;

class ClearCompaniesFromAPortfolioForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}