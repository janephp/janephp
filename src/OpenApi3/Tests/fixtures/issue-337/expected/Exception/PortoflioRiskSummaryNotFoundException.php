<?php

namespace CreditSafe\API\Exception;

class PortoflioRiskSummaryNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}