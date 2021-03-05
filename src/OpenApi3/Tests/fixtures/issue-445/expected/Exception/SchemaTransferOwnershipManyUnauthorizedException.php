<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}