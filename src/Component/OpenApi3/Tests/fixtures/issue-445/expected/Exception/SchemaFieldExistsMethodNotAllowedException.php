<?php

namespace PicturePark\API\Exception;

class SchemaFieldExistsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}