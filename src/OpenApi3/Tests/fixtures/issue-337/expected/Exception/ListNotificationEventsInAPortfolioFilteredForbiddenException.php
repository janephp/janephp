<?php

namespace CreditSafe\API\Exception;

class ListNotificationEventsInAPortfolioFilteredForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}