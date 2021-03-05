<?php

namespace CreditSafe\API\Exception;

class CustomReportParametersUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}