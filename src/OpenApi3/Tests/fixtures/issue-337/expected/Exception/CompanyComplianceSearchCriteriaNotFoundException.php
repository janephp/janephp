<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchCriteriaNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}