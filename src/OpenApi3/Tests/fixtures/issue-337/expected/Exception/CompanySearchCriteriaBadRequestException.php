<?php

namespace CreditSafe\API\Exception;

class CompanySearchCriteriaBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}