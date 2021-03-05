<?php

namespace CreditSafe\API\Exception;

class RequestFreshInvestigationBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}