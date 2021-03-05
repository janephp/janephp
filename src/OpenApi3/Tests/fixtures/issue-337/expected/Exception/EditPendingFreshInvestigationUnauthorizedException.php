<?php

namespace CreditSafe\API\Exception;

class EditPendingFreshInvestigationUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}