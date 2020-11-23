<?php

namespace CreditSafe\API\Exception;

class BankMatchUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}