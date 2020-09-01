<?php

namespace Gounlaf\JanephpBug\Exception;

class PatchEntityBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Invalid request', 400);
    }
}