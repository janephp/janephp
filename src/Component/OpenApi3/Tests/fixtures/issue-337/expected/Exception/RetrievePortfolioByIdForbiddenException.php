<?php

namespace CreditSafe\API\Exception;

class RetrievePortfolioByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}