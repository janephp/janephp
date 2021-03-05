<?php

namespace PicturePark\API\Exception;

class ListItemBatchUpdateFieldsByIdsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}