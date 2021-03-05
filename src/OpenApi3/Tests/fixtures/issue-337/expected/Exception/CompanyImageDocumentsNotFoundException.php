<?php

namespace CreditSafe\API\Exception;

class CompanyImageDocumentsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}