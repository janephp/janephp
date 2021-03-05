<?php

namespace PicturePark\API\Exception;

class TransferSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}