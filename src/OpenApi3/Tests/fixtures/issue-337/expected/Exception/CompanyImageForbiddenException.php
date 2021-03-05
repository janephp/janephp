<?php

namespace CreditSafe\API\Exception;

class CompanyImageForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}