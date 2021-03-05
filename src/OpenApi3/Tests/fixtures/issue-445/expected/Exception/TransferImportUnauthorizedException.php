<?php

namespace PicturePark\API\Exception;

class TransferImportUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}