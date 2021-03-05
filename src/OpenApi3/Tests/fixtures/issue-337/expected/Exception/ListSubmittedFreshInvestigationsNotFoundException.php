<?php

namespace CreditSafe\API\Exception;

class ListSubmittedFreshInvestigationsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}