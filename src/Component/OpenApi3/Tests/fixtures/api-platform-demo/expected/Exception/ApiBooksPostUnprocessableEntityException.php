<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksPostUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}