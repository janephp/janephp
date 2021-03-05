<?php

namespace CreditSafe\API\Exception;

class CustomReportParametersBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}