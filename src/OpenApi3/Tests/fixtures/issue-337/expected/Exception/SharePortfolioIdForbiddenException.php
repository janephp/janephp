<?php

namespace CreditSafe\API\Exception;

class SharePortfolioIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}