<?php

namespace PicturePark\API\Exception;

class XmpMappingCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}