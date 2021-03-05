<?php

namespace CreditSafe\API\Exception;

class RequestFreshInvestigationForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}