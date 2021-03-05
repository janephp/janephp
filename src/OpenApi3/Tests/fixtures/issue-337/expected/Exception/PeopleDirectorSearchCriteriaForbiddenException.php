<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchCriteriaForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}