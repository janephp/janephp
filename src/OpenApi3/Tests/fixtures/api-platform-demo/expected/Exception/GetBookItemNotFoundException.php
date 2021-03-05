<?php

namespace ApiPlatform\Demo\Exception;

class GetBookItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}