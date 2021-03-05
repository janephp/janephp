<?php

namespace CreditSafe\API\Exception;

class RunDecisionTreeBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}