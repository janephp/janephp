<?php

namespace CreditSafe\API\Exception;

class CountriesInSubscriptionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}