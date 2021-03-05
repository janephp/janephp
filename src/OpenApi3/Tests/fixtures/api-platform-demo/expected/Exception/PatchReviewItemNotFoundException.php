<?php

namespace ApiPlatform\Demo\Exception;

class PatchReviewItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}