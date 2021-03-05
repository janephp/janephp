<?php

namespace CreditSafe\API\Exception;

class PortfolioUserPermissionsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}