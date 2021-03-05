<?php

namespace CreditSafe\API\Exception;

class MoveCompaniesFromOneToAnotherPortfolioSBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}