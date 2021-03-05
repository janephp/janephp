<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}