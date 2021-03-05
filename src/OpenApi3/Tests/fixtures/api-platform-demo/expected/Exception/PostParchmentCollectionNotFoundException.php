<?php

namespace ApiPlatform\Demo\Exception;

class PostParchmentCollectionNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}