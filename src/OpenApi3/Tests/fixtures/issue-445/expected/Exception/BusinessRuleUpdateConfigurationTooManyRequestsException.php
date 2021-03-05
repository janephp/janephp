<?php

namespace PicturePark\API\Exception;

class BusinessRuleUpdateConfigurationTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}