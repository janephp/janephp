<?php

namespace CreditSafe\API\Exception;

class RequestFreshInvestigationForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}