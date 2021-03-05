<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}