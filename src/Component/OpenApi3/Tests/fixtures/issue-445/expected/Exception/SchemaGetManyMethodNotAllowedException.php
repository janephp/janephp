<?php

namespace PicturePark\API\Exception;

class SchemaGetManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}