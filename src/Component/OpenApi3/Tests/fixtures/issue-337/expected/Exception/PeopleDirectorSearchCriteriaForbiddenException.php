<?php

namespace CreditSafe\API\Exception;

class PeopleDirectorSearchCriteriaForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}