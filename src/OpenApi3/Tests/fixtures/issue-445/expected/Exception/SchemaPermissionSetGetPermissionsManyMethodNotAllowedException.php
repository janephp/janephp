<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetPermissionsManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}