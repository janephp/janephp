<?php

namespace CreditSafe\API\Exception;

class CompanyCreditReportBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}