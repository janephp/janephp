<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsIdPatchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}