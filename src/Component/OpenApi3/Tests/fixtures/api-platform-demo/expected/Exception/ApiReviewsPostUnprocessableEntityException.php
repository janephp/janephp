<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsPostUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}