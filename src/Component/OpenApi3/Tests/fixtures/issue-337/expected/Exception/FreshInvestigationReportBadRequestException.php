<?php

namespace CreditSafe\API\Exception;

class FreshInvestigationReportBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}