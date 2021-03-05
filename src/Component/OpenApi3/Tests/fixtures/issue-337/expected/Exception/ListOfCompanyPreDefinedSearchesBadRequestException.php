<?php

namespace CreditSafe\API\Exception;

class ListOfCompanyPreDefinedSearchesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}