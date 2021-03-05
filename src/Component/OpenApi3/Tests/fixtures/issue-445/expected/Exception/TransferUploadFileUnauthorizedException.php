<?php

namespace PicturePark\API\Exception;

class TransferUploadFileUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}