<?php

namespace PicturePark\API\Exception;

class TransferGetFileTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}