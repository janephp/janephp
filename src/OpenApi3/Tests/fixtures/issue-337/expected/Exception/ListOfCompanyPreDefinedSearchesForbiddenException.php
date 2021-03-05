<?php

namespace CreditSafe\API\Exception;

class ListOfCompanyPreDefinedSearchesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}