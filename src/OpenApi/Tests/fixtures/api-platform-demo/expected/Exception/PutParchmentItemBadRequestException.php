<?php

namespace ApiPlatform\Demo\Exception;

class PutParchmentItemBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Invalid input', 400);
    }
}