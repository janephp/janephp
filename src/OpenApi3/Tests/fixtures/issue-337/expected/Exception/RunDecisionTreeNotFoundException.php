<?php

namespace CreditSafe\API\Exception;

class RunDecisionTreeNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}