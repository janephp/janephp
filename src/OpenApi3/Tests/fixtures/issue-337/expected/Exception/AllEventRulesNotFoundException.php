<?php

namespace CreditSafe\API\Exception;

class AllEventRulesNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}