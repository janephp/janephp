<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdPutNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}