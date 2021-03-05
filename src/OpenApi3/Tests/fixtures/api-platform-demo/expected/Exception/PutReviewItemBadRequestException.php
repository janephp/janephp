<?php

namespace ApiPlatform\Demo\Exception;

class PutReviewItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}