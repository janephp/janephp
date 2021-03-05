<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}