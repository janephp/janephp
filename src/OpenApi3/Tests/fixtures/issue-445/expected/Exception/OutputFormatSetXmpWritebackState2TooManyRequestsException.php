<?php

namespace PicturePark\API\Exception;

class OutputFormatSetXmpWritebackState2TooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}