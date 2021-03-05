<?php

namespace CreditSafe\API\Exception;

class RetrievePortfolioByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}