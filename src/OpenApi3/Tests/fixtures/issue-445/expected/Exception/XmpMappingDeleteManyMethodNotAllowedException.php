<?php

namespace PicturePark\API\Exception;

class XmpMappingDeleteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}