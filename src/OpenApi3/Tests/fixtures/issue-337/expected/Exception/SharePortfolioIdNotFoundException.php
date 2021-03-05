<?php

namespace CreditSafe\API\Exception;

class SharePortfolioIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}