<?php

namespace PicturePark\API\Exception;

class TransferGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}