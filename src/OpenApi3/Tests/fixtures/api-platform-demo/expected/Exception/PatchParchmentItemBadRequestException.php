<?php

namespace ApiPlatform\Demo\Exception;

class PatchParchmentItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}