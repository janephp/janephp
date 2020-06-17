<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchCriteriaBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}