<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdPutUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}