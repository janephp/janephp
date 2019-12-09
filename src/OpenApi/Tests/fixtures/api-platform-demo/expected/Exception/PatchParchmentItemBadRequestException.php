<?php

namespace ApiPlatform\Demo\Exception;

class PatchParchmentItemBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Invalid input', 400);
    }
}