<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetPermissionsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}