<?php

namespace PicturePark\API\Exception;

class TransferPartialImportTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}