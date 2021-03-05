<?php

namespace PicturePark\API\Exception;

class ChannelUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}