<?php

namespace ApiPlatform\Demo\Exception;

class PutParchmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}