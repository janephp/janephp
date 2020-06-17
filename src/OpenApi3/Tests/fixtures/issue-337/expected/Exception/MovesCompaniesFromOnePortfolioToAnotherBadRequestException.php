<?php

namespace CreditSafe\API\Exception;

class MovesCompaniesFromOnePortfolioToAnotherBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}