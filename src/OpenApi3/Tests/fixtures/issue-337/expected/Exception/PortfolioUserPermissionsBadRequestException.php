<?php

namespace CreditSafe\API\Exception;

class PortfolioUserPermissionsBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}