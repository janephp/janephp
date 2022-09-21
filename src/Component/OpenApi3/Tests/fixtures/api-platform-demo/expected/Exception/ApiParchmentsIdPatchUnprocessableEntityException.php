<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdPatchUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}