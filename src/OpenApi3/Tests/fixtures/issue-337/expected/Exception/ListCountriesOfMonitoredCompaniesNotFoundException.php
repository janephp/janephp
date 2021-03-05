<?php

namespace CreditSafe\API\Exception;

class ListCountriesOfMonitoredCompaniesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}