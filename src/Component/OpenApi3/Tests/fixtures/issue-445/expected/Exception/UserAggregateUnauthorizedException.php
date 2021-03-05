<?php

namespace PicturePark\API\Exception;

class UserAggregateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}