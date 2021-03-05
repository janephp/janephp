<?php

namespace CreditSafe\API\Exception;

class CompanySearchCriteriaNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}