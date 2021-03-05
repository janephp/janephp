<?php

namespace PicturePark\API\Exception;

class XmpMappingGetAvailableTargetsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}