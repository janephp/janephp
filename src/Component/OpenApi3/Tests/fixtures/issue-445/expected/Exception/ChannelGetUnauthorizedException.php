<?php

namespace PicturePark\API\Exception;

class ChannelGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}