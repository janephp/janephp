<?php

namespace CreditSafe\API\Exception;

class ListAllPortfoliosBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}