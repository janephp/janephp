<?php

namespace PicturePark\API\Exception;

class ContentBatchUpdateFieldsByFilterTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}