<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}