<?php

namespace PicturePark\API\Exception;

class DocumentHistorySearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}