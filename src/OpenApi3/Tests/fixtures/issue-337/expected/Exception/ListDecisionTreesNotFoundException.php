<?php

namespace CreditSafe\API\Exception;

class ListDecisionTreesNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}