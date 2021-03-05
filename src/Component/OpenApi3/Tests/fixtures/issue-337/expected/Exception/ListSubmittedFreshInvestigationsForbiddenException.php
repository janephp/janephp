<?php

namespace CreditSafe\API\Exception;

class ListSubmittedFreshInvestigationsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}