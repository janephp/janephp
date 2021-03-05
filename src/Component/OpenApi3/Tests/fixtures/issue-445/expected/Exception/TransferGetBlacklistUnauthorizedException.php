<?php

namespace PicturePark\API\Exception;

class TransferGetBlacklistUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}