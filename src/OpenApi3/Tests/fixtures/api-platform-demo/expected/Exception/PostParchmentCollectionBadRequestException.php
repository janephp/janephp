<?php

namespace ApiPlatform\Demo\Exception;

class PostParchmentCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}