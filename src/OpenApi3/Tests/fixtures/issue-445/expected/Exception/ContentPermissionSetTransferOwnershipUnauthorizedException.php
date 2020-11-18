<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetTransferOwnershipUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}