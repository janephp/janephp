<?php

namespace PicturePark\API\Exception;

class DocumentHistoryCompareWithCurrentTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}