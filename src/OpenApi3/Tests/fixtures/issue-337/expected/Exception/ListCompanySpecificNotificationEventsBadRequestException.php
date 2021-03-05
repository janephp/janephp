<?php

namespace CreditSafe\API\Exception;

class ListCompanySpecificNotificationEventsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}