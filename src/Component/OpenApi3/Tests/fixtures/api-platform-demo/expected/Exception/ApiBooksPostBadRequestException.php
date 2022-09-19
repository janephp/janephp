<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}