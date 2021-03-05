<?php

namespace ApiPlatform\Demo\Exception;

class GetParchmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}