<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdPatchNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}