<?php

namespace ApiPlatform\Demo\Exception;

class PutReviewItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}