<?php

namespace CreditSafe\API\Exception;

class UpdateCompanyDetailsInAPortfolioNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}