<?php

namespace PicturePark\API\Exception;

class TransferImportTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}