<?php

namespace PicturePark\API\Exception;

class XmpMappingDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}