<?php

namespace CreditSafe\API\Exception;

class CompanyEventsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}