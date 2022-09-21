<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsPostUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}