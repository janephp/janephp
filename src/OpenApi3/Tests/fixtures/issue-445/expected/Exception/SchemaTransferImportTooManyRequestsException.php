<?php

namespace PicturePark\API\Exception;

class SchemaTransferImportTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}