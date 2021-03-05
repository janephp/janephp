<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetTransferOwnershipUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}