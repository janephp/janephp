<?php

namespace CreditSafe\API\Exception;

class CompanyEventsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}