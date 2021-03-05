<?php

namespace CreditSafe\API\Exception;

class IndividualsComplianceSearchCriteriaUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}