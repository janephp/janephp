<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdGetNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}