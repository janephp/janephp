<?php

namespace CreditSafe\API\Exception;

class SharePortfolioIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}