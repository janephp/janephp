<?php

namespace CreditSafe\API\Exception;

class CompanySearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}