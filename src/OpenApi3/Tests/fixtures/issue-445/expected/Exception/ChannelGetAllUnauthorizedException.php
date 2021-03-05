<?php

namespace PicturePark\API\Exception;

class ChannelGetAllUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}