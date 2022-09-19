<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdGetNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}