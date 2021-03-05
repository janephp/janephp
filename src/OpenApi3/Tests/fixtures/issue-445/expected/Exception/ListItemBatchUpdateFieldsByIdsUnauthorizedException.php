<?php

namespace PicturePark\API\Exception;

class ListItemBatchUpdateFieldsByIdsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}