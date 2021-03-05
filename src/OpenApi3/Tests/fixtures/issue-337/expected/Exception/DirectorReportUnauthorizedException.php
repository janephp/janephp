<?php

namespace CreditSafe\API\Exception;

class DirectorReportUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}