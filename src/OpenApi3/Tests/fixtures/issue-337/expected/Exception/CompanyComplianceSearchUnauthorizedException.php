<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}