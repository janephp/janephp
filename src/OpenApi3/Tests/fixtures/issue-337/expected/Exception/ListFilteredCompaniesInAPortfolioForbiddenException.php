<?php

namespace CreditSafe\API\Exception;

class ListFilteredCompaniesInAPortfolioForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}