<?php

namespace PicturePark\API\Exception;

class SchemaSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}