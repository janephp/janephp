<?php

namespace PicturePark\API\Exception;

class ListItemBatchUpdateFieldsByFilterUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}