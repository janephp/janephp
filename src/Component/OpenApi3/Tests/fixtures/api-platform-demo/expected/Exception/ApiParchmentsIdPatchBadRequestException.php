<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdPatchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}