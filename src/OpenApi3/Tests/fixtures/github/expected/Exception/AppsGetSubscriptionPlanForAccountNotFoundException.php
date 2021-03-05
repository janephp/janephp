<?php

namespace Github\Exception;

class AppsGetSubscriptionPlanForAccountNotFoundException extends NotFoundException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Response when the account has not purchased the listing', 404);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}