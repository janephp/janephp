<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdPutUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}