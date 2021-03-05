<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchCriteriaForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}