<?php

namespace ApiPlatform\Demo\Exception;

class PatchBookItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}