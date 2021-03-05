<?php

namespace CreditSafe\API\Exception;

class CopyCompaniesFromOneToAnotherPortfolioSNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}