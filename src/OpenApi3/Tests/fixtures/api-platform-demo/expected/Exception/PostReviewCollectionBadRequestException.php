<?php

namespace ApiPlatform\Demo\Exception;

class PostReviewCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}