<?php

namespace CreditSafe\API\Exception;

class CompanySearchCriteriaUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}