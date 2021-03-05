<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}