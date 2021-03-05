<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchCriteriaUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}