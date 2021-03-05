<?php

namespace PicturePark\API\Exception;

class XmpMappingGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}