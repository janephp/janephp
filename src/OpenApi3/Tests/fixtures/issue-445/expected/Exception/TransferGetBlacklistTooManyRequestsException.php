<?php

namespace PicturePark\API\Exception;

class TransferGetBlacklistTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}