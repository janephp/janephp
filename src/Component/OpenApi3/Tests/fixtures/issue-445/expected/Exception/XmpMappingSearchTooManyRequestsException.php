<?php

namespace PicturePark\API\Exception;

class XmpMappingSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}