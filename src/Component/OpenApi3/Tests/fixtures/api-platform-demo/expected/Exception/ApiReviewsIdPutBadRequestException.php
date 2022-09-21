<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdPutBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}