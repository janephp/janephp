<?php

namespace CreditSafe\API\Exception;

class ListOfIndividualsPreDefinedSearchesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}