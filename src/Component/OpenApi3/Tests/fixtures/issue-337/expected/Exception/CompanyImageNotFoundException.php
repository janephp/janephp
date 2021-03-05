<?php

namespace CreditSafe\API\Exception;

class CompanyImageNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}