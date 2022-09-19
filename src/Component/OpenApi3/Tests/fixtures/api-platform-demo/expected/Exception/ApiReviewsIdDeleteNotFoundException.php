<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdDeleteNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}