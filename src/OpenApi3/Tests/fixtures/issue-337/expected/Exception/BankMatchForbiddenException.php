<?php

namespace CreditSafe\API\Exception;

class BankMatchForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}