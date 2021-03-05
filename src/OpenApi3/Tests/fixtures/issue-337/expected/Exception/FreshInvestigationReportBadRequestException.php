<?php

namespace CreditSafe\API\Exception;

class FreshInvestigationReportBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}