<?php

namespace PicturePark\API\Exception;

class ContentUpdateMetadataManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}