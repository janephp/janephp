<?php

namespace CreditSafe\API\Exception;

class DeletePendingFreshInvesitgationUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}