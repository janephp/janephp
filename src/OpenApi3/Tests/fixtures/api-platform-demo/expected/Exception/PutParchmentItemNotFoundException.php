<?php

namespace ApiPlatform\Demo\Exception;

class PutParchmentItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Resource not found', 404);
    }
}