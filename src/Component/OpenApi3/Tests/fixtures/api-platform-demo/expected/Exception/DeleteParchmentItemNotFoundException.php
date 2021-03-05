<?php

namespace ApiPlatform\Demo\Exception;

class DeleteParchmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}