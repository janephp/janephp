<?php

namespace PicturePark\API\Exception;

class SchemaGetReferencedMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}