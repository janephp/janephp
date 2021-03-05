<?php

namespace PicturePark\API\Exception;

class DocumentHistoryGetCurrentTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}