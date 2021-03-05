<?php

namespace CreditSafe\API\Exception;

class RetrievePortfolioByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}