<?php

namespace PicturePark\API\Exception;

class XmpMappingDeleteManyMethodNotAllowedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Method not allowed', 405);
    }
}