<?php

namespace CreditSafe\API\Exception;

class ListCompanySpecificNotificationEventsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}