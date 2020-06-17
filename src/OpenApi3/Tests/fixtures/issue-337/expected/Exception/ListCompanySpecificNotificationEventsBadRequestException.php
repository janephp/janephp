<?php

namespace CreditSafe\API\Exception;

class ListCompanySpecificNotificationEventsBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}