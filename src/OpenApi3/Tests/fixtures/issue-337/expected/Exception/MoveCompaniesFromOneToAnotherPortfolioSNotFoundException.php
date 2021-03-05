<?php

namespace CreditSafe\API\Exception;

class MoveCompaniesFromOneToAnotherPortfolioSNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}