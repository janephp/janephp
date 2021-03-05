<?php

namespace CreditSafe\API\Exception;

class ListCompanySpecificNotificationEventsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}