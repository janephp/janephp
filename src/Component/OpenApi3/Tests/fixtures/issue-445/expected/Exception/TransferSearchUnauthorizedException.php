<?php

namespace PicturePark\API\Exception;

class TransferSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}