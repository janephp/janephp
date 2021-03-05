<?php

namespace CreditSafe\API\Exception;

class FilteredEventRulesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}