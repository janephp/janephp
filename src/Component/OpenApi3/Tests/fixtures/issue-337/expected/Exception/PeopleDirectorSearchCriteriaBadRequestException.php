<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchCriteriaBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}