<?php

namespace CreditSafe\API\Exception;

class ListFilteredCompaniesInAPortfolioNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}