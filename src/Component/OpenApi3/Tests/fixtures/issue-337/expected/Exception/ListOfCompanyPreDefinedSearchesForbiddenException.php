<?php

namespace CreditSafe\API\Exception;

class ListOfCompanyPreDefinedSearchesForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}