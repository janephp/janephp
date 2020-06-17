<?php

namespace CreditSafe\API\Exception;

class ResetPortfolioEventRulesBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}