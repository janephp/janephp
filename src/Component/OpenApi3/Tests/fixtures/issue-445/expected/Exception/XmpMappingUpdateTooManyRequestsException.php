<?php

namespace PicturePark\API\Exception;

class XmpMappingUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}