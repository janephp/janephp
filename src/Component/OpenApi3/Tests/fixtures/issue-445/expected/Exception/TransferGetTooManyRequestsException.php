<?php

namespace PicturePark\API\Exception;

class TransferGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}