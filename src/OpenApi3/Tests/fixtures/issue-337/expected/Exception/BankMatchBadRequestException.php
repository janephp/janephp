<?php

namespace CreditSafe\API\Exception;

class BankMatchBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}