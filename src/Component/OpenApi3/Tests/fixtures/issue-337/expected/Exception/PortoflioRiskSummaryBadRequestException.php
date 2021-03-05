<?php

namespace CreditSafe\API\Exception;

class PortoflioRiskSummaryBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}