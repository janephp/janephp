<?php

namespace CreditSafe\API\Exception;

class CompanyCreditReportForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}