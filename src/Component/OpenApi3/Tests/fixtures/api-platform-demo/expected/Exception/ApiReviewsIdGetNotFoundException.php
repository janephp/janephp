<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdGetNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}