<?php

namespace PicturePark\API\Exception;

class ContentUpdateFileTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}