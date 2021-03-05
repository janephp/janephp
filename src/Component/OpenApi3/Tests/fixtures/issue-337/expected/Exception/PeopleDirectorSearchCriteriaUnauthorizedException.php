<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchCriteriaUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}