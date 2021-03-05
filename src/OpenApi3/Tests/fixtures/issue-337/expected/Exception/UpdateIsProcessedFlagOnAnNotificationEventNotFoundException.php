<?php

namespace CreditSafe\API\Exception;

class UpdateIsProcessedFlagOnAnNotificationEventNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}