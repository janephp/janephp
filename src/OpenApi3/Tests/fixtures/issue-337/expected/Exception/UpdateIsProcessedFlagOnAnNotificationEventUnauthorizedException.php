<?php

namespace CreditSafe\API\Exception;

class UpdateIsProcessedFlagOnAnNotificationEventUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}