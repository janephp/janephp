<?php

namespace CreditSafe\API\Exception;

class IndividualPersonComplianceSearchForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}