<?php

namespace CreditSafe\API\Exception;

class CountriesInSubscriptionUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}