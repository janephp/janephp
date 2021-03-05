<?php

namespace CreditSafe\API\Exception;

class CompanyImageBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}