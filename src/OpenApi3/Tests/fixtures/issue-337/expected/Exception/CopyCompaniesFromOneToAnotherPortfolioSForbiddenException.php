<?php

namespace CreditSafe\API\Exception;

class CopyCompaniesFromOneToAnotherPortfolioSForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}