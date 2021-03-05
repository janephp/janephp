<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}