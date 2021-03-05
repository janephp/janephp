<?php

namespace CreditSafe\API\Exception;

class PortfolioUserPermissionsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}