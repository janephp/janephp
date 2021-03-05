<?php

namespace CreditSafe\API\Exception;

class CompanySearchForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}