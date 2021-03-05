<?php

namespace CreditSafe\API\Exception;

class DirectorReportBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}