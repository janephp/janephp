<?php

namespace Gounlaf\JanephpBug\Exception;

class PatchEntityBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid request');
    }
}