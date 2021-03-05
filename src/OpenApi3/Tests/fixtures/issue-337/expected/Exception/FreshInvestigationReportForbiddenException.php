<?php

namespace CreditSafe\API\Exception;

class FreshInvestigationReportForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}