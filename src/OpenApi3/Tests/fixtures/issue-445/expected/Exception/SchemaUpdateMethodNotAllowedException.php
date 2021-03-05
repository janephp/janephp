<?php

namespace PicturePark\API\Exception;

class SchemaUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}