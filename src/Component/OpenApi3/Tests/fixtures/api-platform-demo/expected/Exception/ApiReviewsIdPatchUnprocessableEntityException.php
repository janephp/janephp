<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdPatchUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}