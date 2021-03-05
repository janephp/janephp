<?php

namespace ApiPlatform\Demo\Exception;

class DeleteBookItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}