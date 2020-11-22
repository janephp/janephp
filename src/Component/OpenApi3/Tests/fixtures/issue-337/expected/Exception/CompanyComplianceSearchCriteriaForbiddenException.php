<?php

namespace CreditSafe\API\Exception;

class CompanyComplianceSearchCriteriaForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}