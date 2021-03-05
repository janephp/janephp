<?php

namespace CreditSafe\API\Exception;

class ListDecisionTreesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}