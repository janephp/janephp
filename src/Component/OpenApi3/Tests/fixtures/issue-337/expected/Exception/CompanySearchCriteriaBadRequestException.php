<?php

namespace CreditSafe\API\Exception;

class CompanySearchCriteriaBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}