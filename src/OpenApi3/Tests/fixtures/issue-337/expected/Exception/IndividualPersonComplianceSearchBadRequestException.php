<?php

namespace CreditSafe\API\Exception;

class IndividualPersonComplianceSearchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}