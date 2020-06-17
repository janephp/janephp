<?php

namespace CreditSafe\API\Exception;

class GetFilteredPortfolioEventRulesUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}