<?php

namespace ApiPlatform\Demo\Exception;

class PatchReviewItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}