<?php

namespace CreditSafe\API\Exception;

class IndividualsComplianceSearchCriteriaForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}