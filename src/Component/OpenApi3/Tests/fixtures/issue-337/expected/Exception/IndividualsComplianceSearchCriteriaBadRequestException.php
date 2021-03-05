<?php

namespace CreditSafe\API\Exception;

class IndividualsComplianceSearchCriteriaBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}