<?php

namespace PicturePark\API\Exception;

class SchemaGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}