<?php

namespace CreditSafe\API\Exception;

class ListAllPortfoliosUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}