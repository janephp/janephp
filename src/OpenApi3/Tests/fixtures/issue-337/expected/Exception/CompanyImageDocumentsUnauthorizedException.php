<?php

namespace CreditSafe\API\Exception;

class CompanyImageDocumentsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}