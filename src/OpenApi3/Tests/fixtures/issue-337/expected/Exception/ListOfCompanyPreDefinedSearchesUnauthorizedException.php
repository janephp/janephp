<?php

namespace CreditSafe\API\Exception;

class ListOfCompanyPreDefinedSearchesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}