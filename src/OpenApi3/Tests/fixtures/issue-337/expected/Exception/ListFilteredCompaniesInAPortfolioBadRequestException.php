<?php

namespace CreditSafe\API\Exception;

class ListFilteredCompaniesInAPortfolioBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}