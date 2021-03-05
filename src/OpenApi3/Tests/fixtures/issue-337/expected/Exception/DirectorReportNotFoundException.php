<?php

namespace CreditSafe\API\Exception;

class DirectorReportNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}