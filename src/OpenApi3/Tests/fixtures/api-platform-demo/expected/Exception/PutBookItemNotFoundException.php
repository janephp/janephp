<?php

namespace ApiPlatform\Demo\Exception;

class PutBookItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}