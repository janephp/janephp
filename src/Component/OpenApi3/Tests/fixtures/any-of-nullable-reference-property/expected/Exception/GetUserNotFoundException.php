<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetUserNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}