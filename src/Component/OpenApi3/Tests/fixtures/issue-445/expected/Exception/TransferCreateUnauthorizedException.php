<?php

namespace PicturePark\API\Exception;

class TransferCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}