<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdPutBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}