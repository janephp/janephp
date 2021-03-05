<?php

namespace ApiPlatform\Demo\Exception;

class DeleteReviewItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}