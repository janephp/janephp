<?php

namespace CreditSafe\API\Exception;

class ListAllPortfoliosNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}