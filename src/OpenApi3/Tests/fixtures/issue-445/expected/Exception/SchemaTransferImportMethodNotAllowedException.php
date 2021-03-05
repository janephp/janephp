<?php

namespace PicturePark\API\Exception;

class SchemaTransferImportMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}