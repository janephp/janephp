<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdPatchNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}