<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}