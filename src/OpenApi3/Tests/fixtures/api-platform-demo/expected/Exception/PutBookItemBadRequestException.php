<?php

namespace ApiPlatform\Demo\Exception;

class PutBookItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}