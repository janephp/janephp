<?php

namespace CreditSafe\API\Exception;

class RequestFreshInvestigationNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}