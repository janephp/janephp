<?php

namespace CreditSafe\API\Exception;

class UpdateIsProcessedFlagOnAnNotificationEventForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('');
    }
}