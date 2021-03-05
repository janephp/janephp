<?php

namespace PicturePark\API\Exception;

class XmpMappingCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}