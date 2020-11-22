<?php

namespace CreditSafe\API\Exception;

class ListAllPortfoliosNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}