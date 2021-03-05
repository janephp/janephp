<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}