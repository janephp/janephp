<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetTransferOwnershipManyTooManyRequestsException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Too many requests', 429);
    }
}