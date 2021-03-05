<?php

namespace PicturePark\API\Exception;

class TransferCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}