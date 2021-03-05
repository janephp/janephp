<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForLifeCyclesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}