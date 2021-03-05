<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetUpdateManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}