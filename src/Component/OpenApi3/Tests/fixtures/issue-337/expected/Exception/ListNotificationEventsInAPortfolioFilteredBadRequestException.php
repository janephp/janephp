<?php

namespace CreditSafe\API\Exception;

class ListNotificationEventsInAPortfolioFilteredBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}