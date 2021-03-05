<?php

namespace CreditSafe\API\Exception;

class UpdatePortfolioDetailsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}