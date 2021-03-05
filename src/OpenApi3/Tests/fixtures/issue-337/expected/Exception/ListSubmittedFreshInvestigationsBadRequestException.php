<?php

namespace CreditSafe\API\Exception;

class ListSubmittedFreshInvestigationsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}