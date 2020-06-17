<?php

namespace CreditSafe\API\Exception;

class UpdatePortfolioCompanyUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}