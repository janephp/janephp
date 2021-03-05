<?php

namespace CreditSafe\API\Exception;

class RunDecisionTreeForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}