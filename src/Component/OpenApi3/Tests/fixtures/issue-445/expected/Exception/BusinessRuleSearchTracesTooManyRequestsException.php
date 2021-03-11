<?php

namespace PicturePark\API\Exception;

class BusinessRuleSearchTracesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}