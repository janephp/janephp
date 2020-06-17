<?php

namespace CreditSafe\API\Exception;

class ListOfCompanyPreDefinedSearchesBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}