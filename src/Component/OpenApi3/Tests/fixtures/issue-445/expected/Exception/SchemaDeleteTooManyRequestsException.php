<?php

namespace PicturePark\API\Exception;

class SchemaDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}