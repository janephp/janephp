<?php

namespace CreditSafe\API\Exception;

class ListSubmittedFreshInvestigationsBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}