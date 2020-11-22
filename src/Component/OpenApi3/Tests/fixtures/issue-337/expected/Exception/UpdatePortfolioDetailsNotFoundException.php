<?php

namespace CreditSafe\API\Exception;

class UpdatePortfolioDetailsNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}