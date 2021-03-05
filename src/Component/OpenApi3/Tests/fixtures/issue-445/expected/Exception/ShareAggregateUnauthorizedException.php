<?php

namespace PicturePark\API\Exception;

class ShareAggregateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}