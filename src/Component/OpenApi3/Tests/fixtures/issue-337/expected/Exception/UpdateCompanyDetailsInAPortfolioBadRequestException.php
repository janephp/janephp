<?php

namespace CreditSafe\API\Exception;

class UpdateCompanyDetailsInAPortfolioBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}