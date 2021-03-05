<?php

namespace CreditSafe\API\Exception;

class EditPendingFreshInvestigationForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}