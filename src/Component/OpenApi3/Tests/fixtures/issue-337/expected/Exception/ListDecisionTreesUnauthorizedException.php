<?php

namespace CreditSafe\API\Exception;

class ListDecisionTreesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}