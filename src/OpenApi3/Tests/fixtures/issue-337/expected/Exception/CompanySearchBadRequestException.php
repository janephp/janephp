<?php

namespace CreditSafe\API\Exception;

class CompanySearchBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}