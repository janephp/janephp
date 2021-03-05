<?php

namespace CreditSafe\API\Exception;

class CompanyCreditReportUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}