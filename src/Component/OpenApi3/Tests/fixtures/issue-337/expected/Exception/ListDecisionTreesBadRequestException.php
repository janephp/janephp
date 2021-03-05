<?php

namespace CreditSafe\API\Exception;

class ListDecisionTreesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}