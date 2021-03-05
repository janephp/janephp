<?php

namespace PicturePark\API\Exception;

class ContentBatchUpdateFieldsByIdsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}