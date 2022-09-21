<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdgenerateCoverPutUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}