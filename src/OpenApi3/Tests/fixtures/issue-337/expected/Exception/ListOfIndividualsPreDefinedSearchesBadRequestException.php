<?php

namespace CreditSafe\API\Exception;

class ListOfIndividualsPreDefinedSearchesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}