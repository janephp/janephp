<?php

namespace PicturePark\API\Exception;

class SchemaCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}