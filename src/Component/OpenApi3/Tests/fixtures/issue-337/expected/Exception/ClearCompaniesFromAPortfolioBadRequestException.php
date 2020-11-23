<?php

namespace CreditSafe\API\Exception;

class ClearCompaniesFromAPortfolioBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}