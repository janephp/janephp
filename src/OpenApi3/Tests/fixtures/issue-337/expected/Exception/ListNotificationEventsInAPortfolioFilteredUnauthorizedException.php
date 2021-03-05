<?php

namespace CreditSafe\API\Exception;

class ListNotificationEventsInAPortfolioFilteredUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}