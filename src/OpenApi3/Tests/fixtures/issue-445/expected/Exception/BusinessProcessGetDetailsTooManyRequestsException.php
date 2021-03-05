<?php

namespace PicturePark\API\Exception;

class BusinessProcessGetDetailsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}