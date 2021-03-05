<?php

namespace CreditSafe\API\Exception;

class RetrievePortfolioByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}