<?php

namespace CreditSafe\API\Exception;

class ListOfIndividualsPreDefinedSearchesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}