<?php

namespace CreditSafe\API\Exception;

class CompanySearchCriteriaForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}