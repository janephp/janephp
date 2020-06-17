<?php

namespace CreditSafe\API\Exception;

class SharePortfolioIdUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 401);
    }
}