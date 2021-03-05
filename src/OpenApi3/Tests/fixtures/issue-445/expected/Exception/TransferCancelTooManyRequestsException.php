<?php

namespace PicturePark\API\Exception;

class TransferCancelTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}