<?php

namespace CreditSafe\API\Exception;

class IndividualPersonComplianceSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}