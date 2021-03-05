<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}