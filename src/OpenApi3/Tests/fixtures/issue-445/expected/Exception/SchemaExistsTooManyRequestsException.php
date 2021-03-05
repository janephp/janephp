<?php

namespace PicturePark\API\Exception;

class SchemaExistsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}