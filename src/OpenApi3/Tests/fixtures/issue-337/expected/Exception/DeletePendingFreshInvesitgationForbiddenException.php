<?php

namespace CreditSafe\API\Exception;

class DeletePendingFreshInvesitgationForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}