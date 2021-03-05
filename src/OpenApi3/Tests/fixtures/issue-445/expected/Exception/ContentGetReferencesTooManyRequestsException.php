<?php

namespace PicturePark\API\Exception;

class ContentGetReferencesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}