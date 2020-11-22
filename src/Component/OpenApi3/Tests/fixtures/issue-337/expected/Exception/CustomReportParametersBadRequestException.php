<?php

namespace CreditSafe\API\Exception;

class CustomReportParametersBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}