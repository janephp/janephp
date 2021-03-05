<?php

namespace CreditSafe\API\Exception;

class ListAllPortfoliosForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}