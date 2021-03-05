<?php

namespace CreditSafe\API\Exception;

class PortoflioRiskSummaryForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}