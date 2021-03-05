<?php

namespace CreditSafe\API\Exception;

class CompanyReportJSONSchemaUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}