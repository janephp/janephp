<?php

namespace CreditSafe\API\Exception;

class BankMatchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}