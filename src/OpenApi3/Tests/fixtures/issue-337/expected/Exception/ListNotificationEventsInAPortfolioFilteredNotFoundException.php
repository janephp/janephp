<?php

namespace CreditSafe\API\Exception;

class ListNotificationEventsInAPortfolioFilteredNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}