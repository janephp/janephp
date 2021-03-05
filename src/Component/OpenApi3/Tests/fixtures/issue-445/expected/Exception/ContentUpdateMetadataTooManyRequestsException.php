<?php

namespace PicturePark\API\Exception;

class ContentUpdateMetadataTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}