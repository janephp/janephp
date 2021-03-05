<?php

namespace PicturePark\API\Exception;

class SchemaUpdateManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}