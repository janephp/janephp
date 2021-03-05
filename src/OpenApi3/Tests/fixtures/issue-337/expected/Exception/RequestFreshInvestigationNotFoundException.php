<?php

namespace CreditSafe\API\Exception;

class RequestFreshInvestigationNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}