<?php

namespace Github\Exception;

class AppsGetSubscriptionPlanForAccountStubbedNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response when the account has not purchased the listing');
    }
}