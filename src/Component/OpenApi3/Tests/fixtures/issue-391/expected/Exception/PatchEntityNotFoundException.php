<?php

namespace Gounlaf\JanephpBug\Exception;

class PatchEntityNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Entity not found');
    }
}