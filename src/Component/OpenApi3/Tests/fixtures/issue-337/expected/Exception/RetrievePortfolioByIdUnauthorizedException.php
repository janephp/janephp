<?php

namespace CreditSafe\API\Exception;

class RetrievePortfolioByIdUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}