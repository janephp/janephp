<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchCriteriaBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}