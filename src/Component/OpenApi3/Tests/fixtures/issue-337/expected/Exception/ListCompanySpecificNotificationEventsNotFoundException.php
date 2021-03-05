<?php

namespace CreditSafe\API\Exception;

class ListCompanySpecificNotificationEventsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}