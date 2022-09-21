<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdPutNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}