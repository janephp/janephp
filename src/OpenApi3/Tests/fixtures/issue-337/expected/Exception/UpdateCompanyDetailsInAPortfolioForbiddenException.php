<?php

namespace CreditSafe\API\Exception;

class UpdateCompanyDetailsInAPortfolioForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}