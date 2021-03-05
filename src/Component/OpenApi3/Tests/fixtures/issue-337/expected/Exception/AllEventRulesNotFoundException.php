<?php

namespace CreditSafe\API\Exception;

class AllEventRulesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}