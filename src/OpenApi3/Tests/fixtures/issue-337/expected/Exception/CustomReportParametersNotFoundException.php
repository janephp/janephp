<?php

namespace CreditSafe\API\Exception;

class CustomReportParametersNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}