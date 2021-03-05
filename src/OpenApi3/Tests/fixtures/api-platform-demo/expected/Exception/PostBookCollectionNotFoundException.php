<?php

namespace ApiPlatform\Demo\Exception;

class PostBookCollectionNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}