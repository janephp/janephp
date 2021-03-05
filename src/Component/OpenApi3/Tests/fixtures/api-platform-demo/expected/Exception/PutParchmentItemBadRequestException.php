<?php

namespace ApiPlatform\Demo\Exception;

class PutParchmentItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}