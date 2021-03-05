<?php

namespace PicturePark\API\Exception;

class SchemaGetManyReferencedMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}