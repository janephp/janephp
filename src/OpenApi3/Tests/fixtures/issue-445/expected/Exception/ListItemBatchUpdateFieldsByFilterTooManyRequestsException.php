<?php

namespace PicturePark\API\Exception;

class ListItemBatchUpdateFieldsByFilterTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}