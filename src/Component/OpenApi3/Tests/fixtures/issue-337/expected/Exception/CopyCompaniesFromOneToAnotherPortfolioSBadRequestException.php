<?php

namespace CreditSafe\API\Exception;

class CopyCompaniesFromOneToAnotherPortfolioSBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}