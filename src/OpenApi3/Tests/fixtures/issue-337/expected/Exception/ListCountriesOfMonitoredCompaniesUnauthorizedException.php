<?php

namespace CreditSafe\API\Exception;

class ListCountriesOfMonitoredCompaniesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}