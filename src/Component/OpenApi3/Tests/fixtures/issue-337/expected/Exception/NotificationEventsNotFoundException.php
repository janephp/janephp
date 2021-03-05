<?php

namespace CreditSafe\API\Exception;

class NotificationEventsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}