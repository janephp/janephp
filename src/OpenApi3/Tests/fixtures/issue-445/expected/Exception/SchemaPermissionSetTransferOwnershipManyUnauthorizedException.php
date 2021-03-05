<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetTransferOwnershipManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}