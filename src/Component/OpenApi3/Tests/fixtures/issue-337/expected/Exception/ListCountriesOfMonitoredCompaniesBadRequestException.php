<?php

namespace CreditSafe\API\Exception;

class ListCountriesOfMonitoredCompaniesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}