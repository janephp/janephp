<?php

namespace CreditSafe\API\Exception;

class GetFilteredPortfolioEventRulesBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}