<?php

namespace CreditSafe\API\Exception;

class GenerateAuthenticationTokenNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}