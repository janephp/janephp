<?php

namespace PicturePark\API\Exception;

class DocumentHistoryCompareWithVersionTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}