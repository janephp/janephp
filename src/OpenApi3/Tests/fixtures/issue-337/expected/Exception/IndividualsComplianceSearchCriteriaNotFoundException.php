<?php

namespace CreditSafe\API\Exception;

class IndividualsComplianceSearchCriteriaNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}