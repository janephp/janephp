<?php

namespace CreditSafe\API\Exception;

class MoveCompaniesFromOneToAnotherPortfolioSForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}