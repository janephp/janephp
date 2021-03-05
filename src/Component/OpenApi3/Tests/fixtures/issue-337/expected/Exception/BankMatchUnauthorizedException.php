<?php

namespace CreditSafe\API\Exception;

class BankMatchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}