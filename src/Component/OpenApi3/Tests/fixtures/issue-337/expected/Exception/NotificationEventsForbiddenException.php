<?php

namespace CreditSafe\API\Exception;

class NotificationEventsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}