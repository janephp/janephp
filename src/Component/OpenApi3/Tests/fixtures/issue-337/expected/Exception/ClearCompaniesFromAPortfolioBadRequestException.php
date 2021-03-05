<?php

namespace CreditSafe\API\Exception;

class ClearCompaniesFromAPortfolioBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}