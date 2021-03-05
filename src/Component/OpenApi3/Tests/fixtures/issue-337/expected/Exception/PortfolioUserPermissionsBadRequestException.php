<?php

namespace CreditSafe\API\Exception;

class PortfolioUserPermissionsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}