<?php

namespace CreditSafe\API\Exception;

class ListCountriesOfMonitoredCompaniesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}