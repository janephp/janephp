<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdPatchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}