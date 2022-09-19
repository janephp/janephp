<?php

namespace ApiPlatform\Demo\Exception;

class ApiTopBooksIdGetNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}