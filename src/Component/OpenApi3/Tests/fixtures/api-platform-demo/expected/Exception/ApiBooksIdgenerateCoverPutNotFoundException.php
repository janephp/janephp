<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdgenerateCoverPutNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}