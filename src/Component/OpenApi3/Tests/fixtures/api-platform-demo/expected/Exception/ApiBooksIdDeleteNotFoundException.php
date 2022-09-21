<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdDeleteNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}