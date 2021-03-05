<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetTransferOwnershipManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}