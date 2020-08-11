<?php

namespace Github\Exception;

class AppsGetSubscriptionPlanForAccountStubbedNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response when the account has not purchased the listing', 404);
    }
}