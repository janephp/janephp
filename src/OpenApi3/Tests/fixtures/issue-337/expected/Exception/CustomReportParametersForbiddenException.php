<?php

namespace CreditSafe\API\Exception;

class CustomReportParametersForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}