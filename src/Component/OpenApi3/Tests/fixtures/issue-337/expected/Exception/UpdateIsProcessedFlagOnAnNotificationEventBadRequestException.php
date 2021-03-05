<?php

namespace CreditSafe\API\Exception;

class UpdateIsProcessedFlagOnAnNotificationEventBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}