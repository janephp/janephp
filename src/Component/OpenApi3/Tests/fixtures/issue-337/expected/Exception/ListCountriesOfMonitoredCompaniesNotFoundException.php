<?php

namespace CreditSafe\API\Exception;

class ListCountriesOfMonitoredCompaniesNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}