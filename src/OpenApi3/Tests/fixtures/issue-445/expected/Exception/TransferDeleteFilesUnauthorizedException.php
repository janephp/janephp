<?php

namespace PicturePark\API\Exception;

class TransferDeleteFilesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}