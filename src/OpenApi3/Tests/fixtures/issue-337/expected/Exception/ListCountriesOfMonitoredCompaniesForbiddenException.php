<?php

namespace CreditSafe\API\Exception;

class ListCountriesOfMonitoredCompaniesForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}