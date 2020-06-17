<?php

namespace CreditSafe\API\Exception;

class ListNotificationEventsInAPortfolioFilteredBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}