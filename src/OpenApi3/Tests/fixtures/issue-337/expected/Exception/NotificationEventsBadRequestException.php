<?php

namespace CreditSafe\API\Exception;

class NotificationEventsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}