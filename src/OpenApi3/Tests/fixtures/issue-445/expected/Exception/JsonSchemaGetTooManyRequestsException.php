<?php

namespace PicturePark\API\Exception;

class JsonSchemaGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}