<?php

namespace Gounlaf\JanephpBug\Exception;

class PatchEntityNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Entity not found', 404);
    }
}