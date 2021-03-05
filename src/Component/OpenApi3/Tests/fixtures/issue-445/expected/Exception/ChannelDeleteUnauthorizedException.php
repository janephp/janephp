<?php

namespace PicturePark\API\Exception;

class ChannelDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}