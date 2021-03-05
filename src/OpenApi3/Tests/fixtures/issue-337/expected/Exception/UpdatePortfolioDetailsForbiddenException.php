<?php

namespace CreditSafe\API\Exception;

class UpdatePortfolioDetailsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}