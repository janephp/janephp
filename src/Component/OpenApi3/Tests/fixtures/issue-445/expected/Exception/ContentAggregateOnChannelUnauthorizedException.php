<?php

namespace PicturePark\API\Exception;

class ContentAggregateOnChannelUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}