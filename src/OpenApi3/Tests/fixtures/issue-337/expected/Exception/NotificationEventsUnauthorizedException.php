<?php

namespace CreditSafe\API\Exception;

class NotificationEventsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}