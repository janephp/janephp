<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdPatchUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}