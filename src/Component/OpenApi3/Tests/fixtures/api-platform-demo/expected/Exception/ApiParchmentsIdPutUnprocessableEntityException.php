<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdPutUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}